<?php

return [
    'alipay' => [
        'app_id'         => '2016100100635997',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAudl+tvcVeK/N/juU/YG+y5MY6ORePa4ulQhkMBDFIx2JnXJmKLolCH1VAfmtz6cAXK30WXfeN8ql0ryAiFiip/2a+v1dOlCDT/edcnbiZI3+ARo0ryz6oyA5oYs8aIgt4oXb0U6RVWdLTnl7bahHq68TUhk6npDQkpKW4Qwx+5RY0WzqI8I62NhoXUqEh23hw6sNadi//nUPO6i51vMoCNYYM66kfyMrdqi9Ex52xf6Y9i8UDMuuW8R/9Z2ZcdJiRhX2jPGe0M5U7SlBWeHfzLn2OBEexFguo4EHZ+XU35sjx0ug/qcvsgmZbLegnqvT8KKUThdNwe+bCb/uzgHnJwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA50xj5Eo4xEKgh+/q7BcmfLy+Y15I1eg653W64z9mu73+KmQsdnLtETn7NAfDkqtd+XjPFmILsOWPIFkxwlPoViigYl3TjODMSqXpC0sNz8xae7hWLLXFhewiwr1ntB/i0WoeN4IrbnHrBDHP3WeLmjorTYl/O5Egtx6KDzgT+YdmT/O3s2aLGCH+7BNZSg969NZCslcYT1kcADUKw+QCwbN3hzWErdoz/FvFhE+bLYmzP5seqfAp9OR0dfcBqE0Z9qQzLtJGX7pUds+coTZGVcQeEIkze0rxXZc9r5X3q84pCh/5u/ACjR5uVVocnV1T164CVcsBb+93lnpb1E/izwIDAQABAoIBACoLV8kiuMjsN5QeR3zdBHD+OjmD5QeFLFfwraUrXDhaY/4+sVpir7dG6+PcWW+q2O1FSZePAQMJ54eAzyu85unqfqUC2zarklcra35TCVKxme0NaBS+ggZDE1qE5Xn3pdpdSNrcPZrY+FiN2XQso1LIqiBxEwC389N1qLD1h6P+4V8ol80k9icO+3tqYMPqBr0HK556lMVMHfzBBfv9V2Jzg+02QKPh1iP49RjEafBQ/vNf+D1p42U9h7RFskp2wYnEQyecfJPbzrlV0uw5als7FgEYgH77OKReXSsTnVgPuSDOPiAKGBz9ZGlBSJAaEt/ZK4iHC6+DXaIqxnq9hVkCgYEA9yQpM8CZp6n8l585avoEdiAiPy/u+KL84ZELiTnYjo3miS/YnT739IRmwHOjZkTtYP9+jJ4d2AJZxc9JjbaQlt4nZMXz5ZC88PMYvTJ3VaW1O6mHQ9/n3Za4RkDaicwSlqgNyiON+N+uuCWJdN4YxQTNMCH0T6kd9SXRCTfSgT0CgYEA75bZxgh868SCDZMUraVF/hUFqJMveReX6z/ixPjK731sps9Ptn/fFqoyU6gjekgGFcWlkmy8Gr01Ehtl3ErDy/89+Uh+BE/aEc9NJAZdqvwOQZLmI0cn3H5+1YjjmtYPp5pdVbt90elQ0rtfPVMe7lK3UUCyvRFic1fgK6lynPsCgYA0yWZ7hVHMfARVpk6vSMOXL3nhIS3bsYRt8XsTTmWw3SI2fx+3RnHTqkwAIzLtbx98rlWrV0JsluPx2jqNqEbt0nl7jsRvbiDNHj9Ueej/RCuXmLgpiTOPItgtOUD0WcBGqZJ4cGuskqpQ7sOTULTdsA7bjwUN1sNtTyx82Y1+yQKBgQCMbvFrAGKol2BbsJB4T9281nmgm9VBtzCW9bVoGyRoSC49gFqK8FzFHjGtk2poLHtUm6s3LoD7c1f+Kw0DmNc3ZX7f9TvYLy31Lnta2Fhi9qcsjHxUxUp6FbMmWrx+b2ZxqSt4KxPOzGFRg/6JJYWFz/ofqDqcU+pPDX0aWpIRrQKBgHNV7TjNNG/wYMsClwo+MGAZ0Pc+i2JccwBc+cvL8idj/eYK63Q6Rh9ABpPXZzwYR7QbSkWQRMGmsAb7LPs8BeNCir5mq1T+Lg/en1NkYXI4Wm9erzI1qSYTQ2l6oeFF1KhQU1Pprc5fGi/d9Xy/PSVGmf6qo40h6BW1G+elDUzW',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
