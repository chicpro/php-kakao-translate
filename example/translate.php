<?php
/**
* @author chicpro <chicpro@gmail.com>
* @copyright (c) chicpro
* @link https://ncube.net
*/

require __DIR__.'/../vendor/autoload.php';

use chicpro\KAKAO\TRANSLATE;

$appKey = '';

$translate = new TRANSLATE();

$translate->setAppKey($appKey);
$translate->setSourceLanguage('kr');
$translate->setTargetLanguage('en');

$query = '지난해 3월 오픈한 카카오톡 주문하기는 현재까지 약 250만명의 회원을 확보했으며, 주문 가능한 프랜차이즈 브랜드는 38개, 가맹점수는 약 1만 5천여곳에 달한다. 전 국민에게 친숙한 카카오톡 UI를 활용하기 때문에 남녀노소 누구나 쉽게 이용할 수 있으며, 별도의 앱을 설치할 필요 없이 카카오톡 내에서 모든 과정이 이뤄지는 것이 특징이다. 지난해 9월 업계 최초로 날짜와 시간을 예약한 뒤 설정한 매장에서 주문 음식을 찾아가는 ‘픽업’ 기능을 도입했고, 올해 1월 스마트스피커 ‘카카오미니’에서 음성을 통해 주문 가능한 메뉴를 안내받을 수 있도록 서비스를 연동하며 차별화를 꾀했다.

중소사업자들이 카카오톡 주문하기에 입점하게 되면 4,300만 카카오톡 이용자들과의 접점을 확보하고, 간편한 주문 과정으로 만족도를 높일 수 있게 된다. 카카오톡 메시지를 통해 신메뉴 출시, 프로모션 등의 소식을 전달할 수 있고, 일대일 채팅 기능을 적용하면 고객과 직접 상담도 가능하다.';

$translate->setQuery($query);

$result = $translate->sendRequest();

print_r($result);