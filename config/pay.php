<?php

return [
    'alipay' => [
        'app_id'         => '2016091400507489',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArQLJr04rh16SYPjkuIdWUv5gB5BDCJTDFOGxQWeUYpbO4YKlaXNVelprPcCR/095NdigqpRXOymI+HjEXl92eb+loKb2fYiWw/HnQ+3VbN8sqCNJMjJHygJkZg1UhFxz+UnEwm8xD+HtiSYrAx5+bBbPAKv/ZuhRzFkbraYpBA6VPx4d/AlNB+A5hmr+m1OfgETWUWGlNxUdbMTEaxViydz8s2rQwy+v1hOsmjQ5Q8VZ4/LlDBmSJbHepbNMIIkznAqE4okyusnauZLjhWbwFRJFOIPFo1/tyxQj0x8Ev+3sAFuDpFbhSHKZ7zhGCfb9WUFqyvcc81hNnBOdeeixgwIDAQAB',
        'private_key'=>'MIIEpAIBAAKCAQEArQLJr04rh16SYPjkuIdWUv5gB5BDCJTDFOGxQWeUYpbO4YKlaXNVelprPcCR/095NdigqpRXOymI+HjEXl92eb+loKb2fYiWw/HnQ+3VbN8sqCNJMjJHygJkZg1UhFxz+UnEwm8xD+HtiSYrAx5+bBbPAKv/ZuhRzFkbraYpBA6VPx4d/AlNB+A5hmr+m1OfgETWUWGlNxUdbMTEaxViydz8s2rQwy+v1hOsmjQ5Q8VZ4/LlDBmSJbHepbNMIIkznAqE4okyusnauZLjhWbwFRJFOIPFo1/tyxQj0x8Ev+3sAFuDpFbhSHKZ7zhGCfb9WUFqyvcc81hNnBOdeeixgwIDAQABAoIBAC35SqzJ4elD6TPZj7W1SOwe6le4Lwftt/UpkBeoNZcJKgpk1B20ZydvNYYgUOt+K+ByIyeQ6akv/VTBirTlOy9ZDOMm2uM6041YD7NOVONsXoqDbeTn1YnJnvI7YpUVmD/LKXzdXTUyPROvz8gxZzjDytgL3H91Bp99okw/ljCcW5Igv7GJUQOraaGWhD9ejAkkqvtdm6in3eBwhMtSh3HD7iR7g2KXRs2md/Jb71V2wQLO+VfP2ghx43WV9swZ/mFn0WJb9eNs1W6KHqHMHNvJ5kALbz+xdzGRGB6iAa3Mk1LOADPI45pEgu2iyaV51pKpoESTdvM1Vtl3pza6V1kCgYEA1ZfroWgRdfh01u/rlxJXh5hVBAh4l/oiG4GVlKIGTbGBXeiqWrZITSWEkLO4D/0pXPdgcLr4atfWjxIgWjGMmU3+SoTWZPqfw6UznLPeoU6bIYUi08H1KL1LxM+dwp7vub7bA+NT9cx7C+WcTX0SvCKaLhDOZtKgzxQQC8ILJO8CgYEAz1w5AFgnXyccC4FXnTERNhbv3Rp+brWv5PDHeZTiS4ZaLliJv/IU1P9rnU6EuJwACzCD/MPjqnPyCdU0Acs5irAI7HBY/3mYDEyMH6x2fxSv/5Vsvp6u8yrL1ItB3hGr/gVyowl7HacnYrqwdWDufDY5Wx+uU5G9mAnhfBMDBK0CgYEA0SoOk2dIAhCmynz0ZmKN2LkyN9rbzWgj0m/ZvU3VgmvbVc0sVdy/fNzKrrFwBChUQzf09zABaQ+oiz6i8/Al0VLxPKRNF2He5kZ2/nOeBrTlcbPg4SHFJHoLItZ1lUrzUyA1dd8+LyxpKsNVhwR+PkJcXdQTa9nDpEXvWLRTGX0CgYEAlxkBZDHYRqrN8chHGoDlpL9j+35RwMRdrnqRMBQALb5xujHD9n0lFuwj85WCeq8aDQ1GMAphvBQOu4GDCweWH2wUpI1dHJPy6otg07etBP8DHD865U/l9cUqj+8FiRbheBFqLkk7UCk8NuIIsQ932ET+2FqmgbjCKaaRiwKjgWUCgYA8SnEiOU7vQq2Sk0h6ibXnGr/DYPZYsH/SjyeNowDql01dhwDQpY9bXBstBuByizjbYlvr3CWQ5o9dPRGdmyhwxBmZtNZcwR0tYO7BnNE0nQSvonOpzPX/hKDg3a/VV6YH9AaENQ7CZ5NTD/B9ZtVuCchnGV61Vimp9sFyEsjuKg==',
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
