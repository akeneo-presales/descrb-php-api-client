<?php
/**
 * ContactApi
 * PHP version 7.3
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * {descrb}
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AkeneoPresales\DescrbAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use AkeneoPresales\DescrbAPI\Client\ApiException;
use AkeneoPresales\DescrbAPI\Client\Configuration;
use AkeneoPresales\DescrbAPI\Client\HeaderSelector;
use AkeneoPresales\DescrbAPI\Client\ObjectSerializer;

/**
 * ContactApi Class Doc Comment
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation contactFormApiV1ContactPost
     *
     * Contact Form
     *
     * @param  string $language language (required)
     * @param  string $name Name (required)
     * @param  string $email Email (required)
     * @param  string $message Email Message (required)
     * @param  string $phone_number Phone Number (optional, default to '')
     *
     * @throws \AkeneoPresales\DescrbAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return mixed|\AkeneoPresales\DescrbAPI\Client\Model\HTTPValidationError
     */
    public function contactFormApiV1ContactPost($language, $name, $email, $message, $phone_number = '')
    {
        list($response) = $this->contactFormApiV1ContactPostWithHttpInfo($language, $name, $email, $message, $phone_number);
        return $response;
    }

    /**
     * Operation contactFormApiV1ContactPostWithHttpInfo
     *
     * Contact Form
     *
     * @param  string $language (required)
     * @param  string $name Name (required)
     * @param  string $email Email (required)
     * @param  string $message Email Message (required)
     * @param  string $phone_number Phone Number (optional, default to '')
     *
     * @throws \AkeneoPresales\DescrbAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of mixed|\AkeneoPresales\DescrbAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactFormApiV1ContactPostWithHttpInfo($language, $name, $email, $message, $phone_number = '')
    {
        $request = $this->contactFormApiV1ContactPostRequest($language, $name, $email, $message, $phone_number);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('mixed' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'mixed', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\AkeneoPresales\DescrbAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\AkeneoPresales\DescrbAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'mixed';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'mixed',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\AkeneoPresales\DescrbAPI\Client\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contactFormApiV1ContactPostAsync
     *
     * Contact Form
     *
     * @param  string $language (required)
     * @param  string $name Name (required)
     * @param  string $email Email (required)
     * @param  string $message Email Message (required)
     * @param  string $phone_number Phone Number (optional, default to '')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contactFormApiV1ContactPostAsync($language, $name, $email, $message, $phone_number = '')
    {
        return $this->contactFormApiV1ContactPostAsyncWithHttpInfo($language, $name, $email, $message, $phone_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactFormApiV1ContactPostAsyncWithHttpInfo
     *
     * Contact Form
     *
     * @param  string $language (required)
     * @param  string $name Name (required)
     * @param  string $email Email (required)
     * @param  string $message Email Message (required)
     * @param  string $phone_number Phone Number (optional, default to '')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contactFormApiV1ContactPostAsyncWithHttpInfo($language, $name, $email, $message, $phone_number = '')
    {
        $returnType = 'mixed';
        $request = $this->contactFormApiV1ContactPostRequest($language, $name, $email, $message, $phone_number);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'contactFormApiV1ContactPost'
     *
     * @param  string $language (required)
     * @param  string $name Name (required)
     * @param  string $email Email (required)
     * @param  string $message Email Message (required)
     * @param  string $phone_number Phone Number (optional, default to '')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contactFormApiV1ContactPostRequest($language, $name, $email, $message, $phone_number = '')
    {
        // verify the required parameter 'language' is set
        if ($language === null || (is_array($language) && count($language) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $language when calling contactFormApiV1ContactPost'
            );
        }
        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling contactFormApiV1ContactPost'
            );
        }
        // verify the required parameter 'email' is set
        if ($email === null || (is_array($email) && count($email) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $email when calling contactFormApiV1ContactPost'
            );
        }
        // verify the required parameter 'message' is set
        if ($message === null || (is_array($message) && count($message) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $message when calling contactFormApiV1ContactPost'
            );
        }

        $resourcePath = '/api/v1/contact/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($language !== null) {
            if('form' === 'form' && is_array($language)) {
                foreach($language as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['language'] = $language;
            }
        }



        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = ObjectSerializer::toFormValue($email);
        }
        // form params
        if ($message !== null) {
            $formParams['message'] = ObjectSerializer::toFormValue($message);
        }
        // form params
        if ($phone_number !== null) {
            $formParams['phone_number'] = ObjectSerializer::toFormValue($phone_number);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
