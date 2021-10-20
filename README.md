# sebk/swoft-json-response

Json reponse for Swoft

## Install

Create your Swoft project : http://swoft.io/docs/2.x/en/quick-start/install.html

Require Swoft Json Response package (https://github.com/sebk69/swoft-json-response) :
```
composer require sebk/swoft-json-response
```

## Documentation

Simple function JsonResponse.

Usage :
```
JsonResponse($serializable);

// Example
JsonResponse(['test' => 'This is a test']);
```

You can use any serializable for parameter $serializable.

The '\JsonSerializable' interface is supported.
