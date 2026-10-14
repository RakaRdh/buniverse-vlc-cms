/**
 * VLC International Phone Input Component (CMS Asset)
 * Same functionality packaged for CMS dashboard views.
 */

(function (window) {
    const VLC_PHONE_COUNTRIES = [
        { code: '62', dial: '+62', flag: '🇮🇩', iso: 'ID', name: 'Indonesia', format: [3, 4, 4], min: 9, max: 13, stripZero: true },
        { code: '60', dial: '+60', flag: '🇲🇾', iso: 'MY', name: 'Malaysia', format: [2, 3, 4], min: 9, max: 10, stripZero: true },
        { code: '65', dial: '+65', flag: '🇸🇬', iso: 'SG', name: 'Singapore', format: [4, 4], min: 8, max: 8, stripZero: false },
        { code: '66', dial: '+66', flag: '🇹🇭', iso: 'TH', name: 'Thailand', format: [2, 3, 4], min: 9, max: 9, stripZero: true },
        { code: '63', dial: '+63', flag: '🇵🇭', iso: 'PH', name: 'Philippines', format: [3, 3, 4], min: 10, max: 10, stripZero: true },
        { code: '91', dial: '+91', flag: '🇮🇳', iso: 'IN', name: 'India', format: [5, 5], min: 10, max: 10, stripZero: false },
        { code: '81', dial: '+81', flag: '🇯🇵', iso: 'JP', name: 'Japan', format: [2, 4, 4], min: 10, max: 11, stripZero: true },
        { code: '82', dial: '+82', flag: '🇰🇷', iso: 'KR', name: 'South Korea', format: [2, 4, 4], min: 9, max: 11, stripZero: true },
        { code: '1',  dial: '+1',  flag: '🇺🇸', iso: 'US', name: 'USA / CA', format: [3, 3, 4], min: 10, max: 10, stripZero: false },
        { code: '44', dial: '+44', flag: '🇬🇧', iso: 'GB', name: 'UK', format: [4, 3, 4], min: 10, max: 11, stripZero: true },
        { code: '61', dial: '+61', flag: '🇦🇺', iso: 'AU', name: 'Australia', format: [3, 3, 3], min: 9, max: 9, stripZero: true },
        { code: '971', dial: '+971', flag: '🇦🇪', iso: 'AE', name: 'UAE', format: [2, 3, 4], min: 9, max: 9, stripZero: true },
        { code: '966', dial: '+966', flag: '🇸🇦', iso: 'SA', name: 'Saudi Arabia', format: [2, 3, 4], min: 9, max: 9, stripZero: true }
    ];

    class VLCPhoneInput {
        constructor(container, options = {}) {
            this.container = typeof container === 'string' ? document.querySelector(container) : container;
            if (!this.container) return;

            this.name = options.name || this.container.getAttribute('data-name') || 'phone';
            this.initialValue = options.value !== undefined ? options.value : (this.container.getAttribute('data-value') || '');
            this.required = options.required !== undefined ? options.required : (this.container.getAttribute('data-required') === 'true');
            this.theme = options.theme || this.container.getAttribute('data-theme') || 'cms';
            this.placeholder = options.placeholder || (this.container.getAttribute('data-placeholder') || '812-3456-7890');
            this.selectedCountry = VLC_PHONE_COUNTRIES[0];

            this.init();
        }

        init() {
            this.container.innerHTML = '';
            this.renderDOM();
            this.bindEvents();
            if (this.initialValue) {
                this.setValue(this.initialValue);
            }
        }

        renderDOM() {
            const isCms = this.theme === 'cms';

            const wrapper = document.createElement('div');
            wrapper.className = isCms 
                ? 'phone-input-wrapper flex items-center border border-border bg-background rounded-lg overflow-hidden transition focus-within:ring-1 focus-within:ring-[#C41E24]'
                : 'phone-input-wrapper flex items-stretch border border-slate-300 bg-white rounded-full overflow-hidden transition focus-within:ring-2 focus-within:ring-[#C41E24] focus-within:border-transparent';

            const selectContainer = document.createElement('div');
            selectContainer.className = isCms
                ? 'phone-select-wrap relative shrink-0 border-r border-border bg-muted/40 hover:bg-muted/70 transition-colors flex items-center'
                : 'phone-select-wrap relative shrink-0 border-r border-slate-200 bg-slate-50 hover:bg-slate-100 transition-colors flex items-center';

            this.selectEl = document.createElement('select');
            this.selectEl.className = isCms
                ? 'w-full h-full appearance-none bg-transparent text-xs font-semibold text-foreground cursor-pointer focus:outline-none pl-3 pr-7 py-2 z-10'
                : 'w-full h-full appearance-none bg-transparent text-xs lg:text-sm font-semibold text-slate-700 cursor-pointer focus:outline-none pl-3 pr-7 py-2.5 z-10 max-w-[125px] sm:max-w-none';
            this.selectEl.setAttribute('aria-label', 'Pilih Negara / Kode Telepon');

            this.optionsElements = [];
            VLC_PHONE_COUNTRIES.forEach((c) => {
                const opt = document.createElement('option');
                opt.value = c.code;
                opt.textContent = `${c.flag} ${c.dial} (${c.iso})`;
                opt.title = `${c.name} (${c.dial})`;
                this.selectEl.appendChild(opt);
                this.optionsElements.push({ el: opt, country: c });
            });

            const chevron = document.createElement('div');
            chevron.className = 'absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400 dark:text-muted-foreground flex items-center justify-center';
            chevron.innerHTML = `<svg class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>`;

            selectContainer.appendChild(this.selectEl);
            selectContainer.appendChild(chevron);

            this.inputEl = document.createElement('input');
            this.inputEl.type = 'tel';
            this.inputEl.autocomplete = 'tel-national';
            this.inputEl.placeholder = this.placeholder;
            this.inputEl.className = isCms
                ? 'phone-digit-input flex-1 px-3 py-1.5 text-xs bg-transparent text-foreground placeholder:text-muted-foreground focus:outline-none min-w-0'
                : 'phone-digit-input flex-1 px-3 py-2 text-xs lg:text-sm bg-transparent text-slate-800 placeholder:text-slate-400 focus:outline-none min-w-0';

            this.hiddenInput = document.createElement('input');
            this.hiddenInput.type = 'hidden';
            this.hiddenInput.name = this.name;
            if (this.required) {
                this.hiddenInput.required = true;
            }

            wrapper.appendChild(selectContainer);
            wrapper.appendChild(this.inputEl);
            this.container.appendChild(wrapper);
            this.container.appendChild(this.hiddenInput);

            this.feedbackEl = document.createElement('p');
            this.feedbackEl.className = 'phone-feedback text-[11px] font-medium mt-1 hidden';
            this.container.appendChild(this.feedbackEl);
        }

        bindEvents() {
            this.selectEl.addEventListener('change', () => {
                const code = this.selectEl.value;
                this.selectedCountry = VLC_PHONE_COUNTRIES.find(c => c.code === code) || VLC_PHONE_COUNTRIES[0];
                this.handleInputChange();
            });

            this.inputEl.addEventListener('input', () => {
                this.handleInputChange();
            });

            this.inputEl.addEventListener('blur', () => {
                this.validate();
            });
        }

        handleInputChange() {
            let val = this.inputEl.value.replace(/[^0-9]/g, '');

            if (this.selectedCountry.stripZero && val.startsWith('0')) {
                val = val.replace(/^0+/, '');
            }

            if (val.length > this.selectedCountry.max) {
                val = val.slice(0, this.selectedCountry.max);
            }

            const formatted = this.formatDigits(val, this.selectedCountry.format);
            this.inputEl.value = formatted;

            if (val.length > 0) {
                this.hiddenInput.value = this.selectedCountry.code + val;
            } else {
                this.hiddenInput.value = '';
            }

            this.validate();
        }

        formatDigits(digits, pattern) {
            if (!digits) return '';
            const chunks = [];
            let cursor = 0;
            for (let i = 0; i < pattern.length; i++) {
                const len = pattern[i];
                if (cursor >= digits.length) break;
                chunks.push(digits.slice(cursor, cursor + len));
                cursor += len;
            }
            if (cursor < digits.length) {
                chunks.push(digits.slice(cursor));
            }
            return chunks.join('-');
        }

        validate() {
            const rawDigits = this.inputEl.value.replace(/[^0-9]/g, '');

            if (!rawDigits) {
                if (this.required) {
                    this.showFeedback('Nomor telepon wajib diisi', 'error');
                    return false;
                }
                this.hideFeedback();
                return true;
            }

            if (rawDigits.length < this.selectedCountry.min) {
                this.showFeedback(`Nomor telepon minimal ${this.selectedCountry.min} digit setelah kode negara`, 'error');
                return false;
            }

            if (/(\d)\1{6,}/.test(rawDigits)) {
                this.showFeedback('Nomor telepon tidak valid (pola digit berulang)', 'error');
                return false;
            }

            const sequential = ['12345678', '23456789', '87654321', '98765432'];
            for (let s of sequential) {
                if (rawDigits.includes(s)) {
                    this.showFeedback('Nomor telepon tidak valid (pola sekuensial)', 'error');
                    return false;
                }
            }

            // If valid, hide feedback completely (do not show green valid text)
            this.hideFeedback();
            return true;
        }

        showFeedback(msg, type) {
            this.feedbackEl.textContent = msg;
            this.feedbackEl.classList.remove('hidden', 'text-emerald-600', 'text-red-500');
            if (type === 'success') {
                this.feedbackEl.classList.add('text-emerald-600');
            } else {
                this.feedbackEl.classList.add('text-red-500');
            }
        }

        hideFeedback() {
            this.feedbackEl.classList.add('hidden');
            this.feedbackEl.textContent = '';
        }

        setValue(val) {
            if (!val) return;
            let str = String(val).trim();
            let digits = str.replace(/[^0-9]/g, '');

            if (digits.startsWith('0')) {
                digits = '62' + digits.slice(1);
            }

            let matched = VLC_PHONE_COUNTRIES[0];
            let nationalDigits = digits;

            for (let c of VLC_PHONE_COUNTRIES) {
                if (digits.startsWith(c.code)) {
                    if (!matched || c.code.length > matched.code.length) {
                        matched = c;
                    }
                }
            }

            if (matched && digits.startsWith(matched.code)) {
                nationalDigits = digits.slice(matched.code.length);
            }

            this.selectedCountry = matched;
            this.selectEl.value = matched.code;

            if (matched.stripZero && nationalDigits.startsWith('0')) {
                nationalDigits = nationalDigits.replace(/^0+/, '');
            }

            this.inputEl.value = this.formatDigits(nationalDigits, matched.format);
            this.hiddenInput.value = nationalDigits ? matched.code + nationalDigits : '';
        }

        getValue() {
            return this.hiddenInput.value;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const containers = document.querySelectorAll('[data-phone-input]');
        containers.forEach(c => {
            if (!c._vlcPhoneInstance) {
                c._vlcPhoneInstance = new VLCPhoneInput(c);
            }
        });
    });

    window.VLCPhoneInput = VLCPhoneInput;
})(window);
