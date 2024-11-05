<?php
return [
    'paths' => ['*'],

    // السماح بجميع طرق الطلبات
    'allowed_methods' => ['*'],

    // السماح لجميع النطاقات
    'allowed_origins' => ['*'],

    // السماح بجميع الرؤوس
    'allowed_headers' => ['*'],

    // عدم وضع قيود على الرؤوس المكشوفة
    'exposed_headers' => [],

    // مدة الصلاحية للطلب قبل إعادة الإرسال
    'max_age' => 0,

    // السماح بدعم ملفات تعريف الارتباط
    'supports_credentials' => true,
];
