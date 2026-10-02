<div id="ModalPreview" class="fixed z-[99] overflow-y-auto top-0 w-full left-0 hidden">
    <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-900 opacity-75">
      </div>
      <span class="hidden inline-block align-middle h-screen">&#8203;</span>
      <div class="block relative lg:p-[24px] p-[20px] top-[50%] left-[50%] bg-white rounded-[20px] text-left overflow-visible shadow-xl transform transition-all lg:max-w-[928px] max-w-[calc(100vw-20px)] w-full h-[543px]" role="dialog" aria-modal="true" aria-labelledby="modal-headline" style="-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);">
        <div class="btn-close absolute right-[0px] top-[-10px]">
            <button id="closeModalPreview" class="w-[30px] h-[30px] drop-shadow-lg" onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <circle cx="20" cy="20" r="20" fill="#ffffff"/>
                    <path d="M20 21.4L15.1 26.3C14.9167 26.4834 14.6833 26.575 14.4 26.575C14.1167 26.575 13.8833 26.4834 13.7 26.3C13.5167 26.1167 13.425 25.8834 13.425 25.6C13.425 25.3167 13.5167 25.0834 13.7 24.9L18.6 20L13.7 15.1C13.5167 14.9167 13.425 14.6834 13.425 14.4C13.425 14.1167 13.5167 13.8834 13.7 13.7C13.8833 13.5167 14.1167 13.425 14.4 13.425C14.6833 13.425 14.9167 13.5167 15.1 13.7L20 18.6L24.9 13.7C25.0833 13.5167 25.3167 13.425 25.6 13.425C25.8833 13.425 26.1167 13.5167 26.3 13.7C26.4833 13.8834 26.575 14.1167 26.575 14.4C26.575 14.6834 26.4833 14.9167 26.3 15.1L21.4 20L26.3 24.9C26.4833 25.0834 26.575 25.3167 26.575 25.6C26.575 25.8834 26.4833 26.1167 26.3 26.3C26.1167 26.4834 25.8833 26.575 25.6 26.575C25.3167 26.575 25.0833 26.4834 24.9 26.3L20 21.4Z" fill="#1C1C1C"/>
                </svg>
            </button>
        </div>
        <iframe id="modalImage" class="w-full h-full rounded-[20px]" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" autoplay="On" allowfullscreen=""></iframe>
        <!-- <img id="modalImage" src="" class="w-full block mx-auto bg-cover rounded-[20px]" alt=""> -->
      </div>
    </div>
</div>