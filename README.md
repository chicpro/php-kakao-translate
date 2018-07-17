# PHP Client for Kakao Translate API #

Kakao 번역 API 사용을 위한 PHP Client

MIT licensed.

#### Kakao Translate API ####

- [번역 API](https://developers.kakao.com/docs/restapi/translation)

## 설치 ##

PHP Composer 를 통해 패키지를 설치합니다.

`$ composer require chicpro/php-kakao-translate`

## 예제 ##

```
require __DIR__.'/vendor/autoload.php';

use chicpro\KAKAO\TRANSLATE;

$appKey = '';

$translate = new TRANSLATE();

$translate->setAppKey($appKey);
$translate->setSourceLanguage('kr');
$translate->setTargetLanguage('en');

$query = '안녕하세요!';

$translate->setQuery($query);

$result = $translate->sendRequest();

print_r($result);```
