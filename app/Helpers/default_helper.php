<?php

function id_date($date_format = 'j M Y | H:i', $timestamp = '', $suffix = 'WIB')
{
  if (trim($timestamp) == '') {
    $timestamp = time();
  } elseif (!ctype_digit((string)$timestamp)) {
    $timestamp = strtotime($timestamp);
  }
  $space = ' ';
  $date_format = preg_replace("/S/", "", $date_format);
  $pattern = array(
    '/Mon[^day]/', '/Tue[^sday]/', '/Wed[^nesday]/', '/Thu[^rsday]/',
    '/Fri[^day]/', '/Sat[^urday]/', '/Sun[^day]/', '/Monday/', '/Tuesday/',
    '/Wednesday/', '/Thursday/', '/Friday/', '/Saturday/', '/Sunday/',
    '/Jan[^uary]/', '/Feb[^ruary]/', '/Mar[^ch]/', '/Apr[^il]/', '/May/',
    '/Jun[^e]/', '/Jul[^y]/', '/Aug[^ust]/', '/Sep[^tember]/', '/Oct[^ober]/',
    '/Nov[^ember]/', '/Dec[^ember]/', '/January/', '/February/', '/March/',
    '/April/', '/June/', '/July/', '/August/', '/September/', '/October/',
    '/November/', '/December/',
  );
  $replace = array(
    'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min',
    'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu',
    'Jan ', 'Feb ', 'Mar ', 'Apr ', 'Mei ', 'Jun ', 'Jul ', 'Aug ', 'Sep ', 'Okt ', 'Nov ', 'Des ',
    'Januari', 'Februari', 'Maret', 'April', 'Juni', 'Juli', 'Agustus', 'September',
    'Oktober', 'November', 'Desember',
  );
  $date = date($date_format, $timestamp);
  $date = preg_replace($pattern, $replace, $date);

  if (empty($suffix))
    $space = '';

  $date = "{$date}{$space}{$suffix}";
  return $date;
}

function get_timeago($ptime, $date_format = 'j M Y | H:i', $suffix = 'WIB')
{
  if (trim($ptime) == '') {
    $ptime = time();
  } elseif (!ctype_digit((string)$ptime)) {
    $ptime = strtotime($ptime);
  }

  $estimate_time = time() - $ptime;

  if ($estimate_time < 1) {
    return 'kurang dari 1 detik yang lalu';
  }

  $condition = array(
    12 * 30 * 24 * 60 * 60  =>  'tahun',
    30 * 24 * 60 * 60       =>  'bulan',
    24 * 60 * 60            =>  'hari',
    60 * 60                 =>  'jam',
    60                      =>  'menit',
    1                       =>  'detik'
  );

  foreach ($condition as $secs => $str) {
    $d = $estimate_time / $secs;

    if ($d >= 1) {
      $r = round($d);
      if ($str == 'jam' || $str == 'menit' || $str == 'detik') {
        return $r . ' ' . $str . ' yang lalu';
      } else {
        return id_date($date_format, $ptime, $suffix);
      }
    }
  }
}