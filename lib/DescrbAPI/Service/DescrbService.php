<?php

namespace AkeneoPresales\DescrbAPI\Service;

use AkeneoPresales\DescrbAPI\Api\LoginApi;
use AkeneoPresales\DescrbAPI\Api\ProductApi;
use AkeneoPresales\DescrbAPI\Api\TaskApi;
use AkeneoPresales\DescrbAPI\Configuration;
use AkeneoPresales\DescrbAPI\Model\ProductDescriptionExtended;
use AkeneoPresales\DescrbAPI\Model\Token;
use GuzzleHttp\Client;

class DescrbService
{
    private Token $auth;

    public function __construct()
    {
        $apiInstance = new LoginApi(
            new Client()
        );
        $username = $_SERVER['DESCRB_USERNAME']; // string
        $password =  $_SERVER['DESCRB_PASSWORD']; // string

        try {
            /** @var Token $result */
            $result = $apiInstance->loginWithOauth2ApiV1LoginOauthPost($username, $password, 'password', '', '', '');
            $this->auth = $result;
        } catch (\Exception $e) {
            echo 'Exception when calling LoginApi->loginWithOauth2ApiV1LoginOauthPost: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @return Token
     */
    public function getAuth(): Token
    {
        return $this->auth;
    }

    /**
     * @param Token $auth
     * @return DescrbService
     */
    public function setAuth(Token $auth): DescrbService
    {
        $this->auth = $auth;
        return $this;
    }

    public function postImage($imagePath)
    {
        $config = Configuration::getDefaultConfiguration()->setAccessToken($this->auth->getAccessToken());

        $apiInstance = new ProductApi(
            new Client(),
            $config
        );
        $base_image = array($imagePath); // \SplFileObject[] | Image Files
        $segmented_image = array(); // AnyOfFileString[] | Segmented Image Files
        $photo_url = ''; // string | Photo URL
        $name = array(); // string[] | Product Names
        $product_id = array(); // string[] | Product IDs
        $length = 512; // int | Numer of Tokens
        $language = 'en'; // string | Supported languages: en,de,fr,es,ro,pl
        $data_language = ''; // string | Data Source Language
        $language_style = 'Neutral'; // string | Choose between Neutral, Casual, Specialist
        $keywords = ''; // string | Important Keywords to include
        $seotags = false; // bool | Add SEO Tags
        $product_history = false; // bool | Add Product History
        $manufacturer_history = false; // bool | Add Manufacturer History
        $technologies = false; // bool | Add List of Technologies
        $labels = false; // bool | Add Labels
        $logos = false; // bool | Add Logo Detection
        $search_codes = false; // bool | Search for SKU, MPU, Product ID
        $unique_product = false; // bool | Unique product, use captions
        $describe_colors = false; // bool | Should the description include colors
        $describe_materials = false; // bool | Should the description include materials

        try {
            $result = $apiInstance->createProductAdApiV1ProductPost($base_image, $segmented_image, $photo_url, $name, $product_id, $length, $language, $data_language, $language_style, $keywords, $seotags, $product_history, $manufacturer_history, $technologies, $labels, $logos, $search_codes, $unique_product, $describe_colors, $describe_materials);
            return json_decode($result);
        } catch (\Exception $e) {
            echo 'Exception when calling ProductApi->createProductAdApiV1ProductPost: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function checkTask($taskId)
    {
        $config = Configuration::getDefaultConfiguration()->setAccessToken($this->auth->getAccessToken());

        $apiInstance = new TaskApi(
            new Client(),
            $config
        );

        try {
            $result = json_decode($apiInstance->getStatusApiV1TaskCheckStatusGet($taskId));

            if(isset($result->{$taskId}))
            {
                return $result->{$taskId};
            }

            return false;
        } catch (\Exception $e) {
            echo 'Exception when calling TaskApi->getStatusApiV1TaskCheckStatusGet: ', $e->getMessage(), PHP_EOL;
        }
        
    }

    public function getDescription($descriptionId)
    {
        $config = Configuration::getDefaultConfiguration()->setAccessToken($this->auth->getAccessToken());

        $apiInstance = new ProductApi(
            new Client(),
            $config
        );

        try {
            /** @var ProductDescriptionExtended $result */
            $result = $apiInstance->getDescriptionApiV1ProductDescriptionIdGet($descriptionId);
            return $result;
        } catch (\Exception $e) {
            echo 'Exception when calling ProductApi->getDescriptionApiV1ProductDescriptionIdGet: ', $e->getMessage(), PHP_EOL;
        }
    }

}
