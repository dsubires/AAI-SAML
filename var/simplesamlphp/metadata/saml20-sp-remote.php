<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */

$metadata['https://192.168.1.168/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array (
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://192.168.1.168/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
    ),
  ),
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://192.168.1.168/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    1 => 
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://192.168.1.168/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
    ),
    2 => 
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://192.168.1.168/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    3 => 
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'https://192.168.1.168/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
    ),
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'emailAddress' => 'dsubires@viewnext.com',
      'contactType' => 'technical',
      'givenName' => 'TFG',
    ),
  ),
  'certData' => 'MIIEITCCAwmgAwIBAgIJAKF7LyIk+Vt3MA0GCSqGSIb3DQEBCwUAMIGmMQswCQYDVQQGEwJCUjEXMBUGA1UECAwOU2FudGEgQ2F0YXJpbmExFjAUBgNVBAcMDUZsb3JpYW5vcG9saXMxDzANBgNVBAoMBkdJZExhYjEWMBQGA1UECwwNQ0FGZSBFeHByZXNzbzEjMCEGA1UEAwwaaWRwaW90LmNhZmVleHByZXNzby5ybnAuYnIxGDAWBgkqhkiG9w0BCQEWCXNkQHJucC5icjAeFw0xNzEwMDIxMzQ2MzNaFw0yNzEwMDIxMzQ2MzNaMIGmMQswCQYDVQQGEwJCUjEXMBUGA1UECAwOU2FudGEgQ2F0YXJpbmExFjAUBgNVBAcMDUZsb3JpYW5vcG9saXMxDzANBgNVBAoMBkdJZExhYjEWMBQGA1UECwwNQ0FGZSBFeHByZXNzbzEjMCEGA1UEAwwaaWRwaW90LmNhZmVleHByZXNzby5ybnAuYnIxGDAWBgkqhkiG9w0BCQEWCXNkQHJucC5icjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAKxqzrfRpdLZ+VF5BeUDtEz3LOOVBQEyUiLzZaDSEjfUt9DmvebGb1Hpofi/javpcWDqywhGL5s5jSnEM8JpzuXf+SvMmrLKUvxV/MBXGUGLY7LGy7zMOcG4qDb0ggF+27m633t8cS+FGeDdT7orA+dzAsoqVxH1TH4deCeVuRQ3QK3nfcGxMc1Cmk9jwhlsJ059d5ENWd6ZwAaNeykKCpz5ZHAa9/cJCgr5sbUooy+ZxOfcs9d2CWLwiVNUhj67YYjJb9DcTmuTBgDNt4k5IZIMD6dtfl28KPAAr+zVKRH6t/pAXe6wi4VmaVEtXdjhHHV/ic+mE+rJONiWTwKS+s8CAwEAAaNQME4wHQYDVR0OBBYEFPZRdEbjuA5AEOAd3eUuGKU6FD1mMB8GA1UdIwQYMBaAFPZRdEbjuA5AEOAd3eUuGKU6FD1mMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAG+Yama5NiUTAd7ewFEyBmIpZljxDlVX9E7Zy/6WcUDLVANDU/qRT88qNvUTbsyV/mLoDfuTfJoqPh4kpCkybEjkdzY4ugXcp8cVv9jXwBIntIxqZ8OgWwpgHRwGUGu6zM5w0tlun1XcwkX7EE7ogOR6cWZVmA/O8ME/n0UDxor0IPkF0Zhd4W6pl0HjR4heWr/aRkk9OLl1UfYPXoq6LGGXYNDuk+YWJy+vao7JFWvHrxgEWBvTD2US3RP/CnDfohPVAWqogI0jcYWVfcjSc50kJ+XNUiO0tStGCXhpfgIxczjVNwu5AWy04lzmlgTeXQO7KeBUR/d2cN1QIyaRsIo=',
);
