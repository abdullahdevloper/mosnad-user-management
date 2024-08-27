<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

        'accepted'             =>'يجب قبول :attribute.',
        'active_url'           => ':attribute ليس عنوان URL صالحًا.',
        'after'                => 'يجب أن يكون :attribute تاريخًا بعد :date.',
        'after_or_equal'       => 'يجب أن يكون :attribute تاريخًابعد أو يساوي :date.',
        'alpha'                => 'قد يحتوي :attribute على أحرف فقط.',
        'alpha_dash'           => 'قد يحتوي :attribute على أحرف وأرقام وشرطات فقط.',
        'alpha_num'            => 'قد يحتوي :attribute على أحرف وأرقام فقط.',
        'array'                => 'يجب أن يكون :attribute مصفوفة.',
        'before'               => 'يجب أن يكون :attribute تاريخًا قبل :date.',
        'before_or_equal'      => 'يجبأن يكون :attribute تاريخًا قبل أو يساوي :date.',
        'between'              => [
            'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
            'file'    => 'يجب أن يكون :attribute بين :min و :max كيلوبايت.',
            'string'  => 'يجب أن يكون :attribute بين :min و :max حرفًا.',
            'array'   => 'يجب أن يحتوي :attribute على ما بين :min و :max عنصرًا.',
        ],
        'boolean'              => 'يجب أن يكون حقل :attribute صحيحًا أو خطأ.',
        'confirmed'            => 'تأكيد :attribute غير متطابق.',
        'date'                 => ':attribute ليس تاريخًا صالحًا.',
        'date_format'          => ':attribute لا يتطابق مع التنسيق :format.',
        'different'            => 'يجب أن يكون :attribute و :other مختلفين.',
        'digits'               => 'يجب أن يكون :attribute :digits رقمًا.',
        'digits_between'       => 'يجب أن يكون :attribute بين :min و :max رقمًا.',
        'dimensions'           => ':attribute له أبعاد صورة غير صالحة.',
        'distinct'             => 'حقل :attribute له قيمة مكررة.',
        'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
        'exists'               => ':attribute المحدد غير صالح.',
        'file'                 => 'يجب أن يكون :attribute ملفًا.',
        'filled'               => 'يجب أن يحتوي حقل :attribute على قيمة.',
        'image'                => 'يجب أن يكون :attribute صورة.',
        'in'                   => ':attribute المحدد غير صالح.',
        'in_array'             => 'حقل :attribute غير موجود في :other.',
        'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا.',
        'ip'                   => 'يجب أن يكون :attribute عنوان IP صالحًا.',
        'json'                 => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
        'max'                  => [
            'numeric' => 'قد لا يكون :attribute أكبر من :max.',
            'file'    => 'قد لا يكون :attribute أكبر من :max كيلوبايت.',
            'string'  => 'قد لا يكون :attribute أكبر من :max حرفًا.',
            'array'   => 'قد لا يحتوي :attribute على أكثر من :max عنصرًا.',
        ],
        'mimes'                => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
        'mimetypes'            => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
        'min'                  => [
            'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
            'file'    => 'يجب أن يكون :attribute على الأقل :min كيلوبايت.',
            'string'  => 'يجب أن يكون :attribute على الأقل :min حرفًا.',
            'array'   => 'يجب أن يحتوي :attribute على الأقل :min عنصرًا.',
        ],
        'not_in'               => ':attribute المحدد غير صالح.',
        'numeric'              => 'يجب أن يكون :attribute رقمًا.',
        'present'              => 'يجب أن يكون حقل:attribute موجودًا.',
        'regex'                => 'تنسيق :attribute غير صالح.',
        'required'             => 'حقل :attribute مطلوب.',
        'required_if'          => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
        'required_unless'      => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
        'required_with'        => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
        'required_with_all'    => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
        'required_without'     => 'حقل :attribute مطلوب عندما لا يكون :values موجودًا.',
        'required_without_all' => 'حقل :attribute مطلوب عندما لا يكون أي من :values موجودًا.',
        'same'                 => 'يجب أن يتطابق :attribute و :other.',
        'size'                 => [
            'numeric' => 'يجب أن يكون :attribute :size.',
            'file'    => 'يجب أن يكون :attribute :size كيلوبايت.',
            'string'  => 'يجب أن يكون :attribute :size حرفًا.',
            'array'   => 'يجب أن يحتوي :attribute على :size عنصرًا.',
        ],
        'string'               => 'يجب أن يكون :attribute سلسلة.',
        'timezone'             => 'يجب أن يكون :attribute منطقة صالحة.',
        'unique'               => ':attribute مأخوذ بالفعل.',
        'uploaded'             => 'فشل تحميل :attribute.',
        'url'                  => 'تنسيق :attribute غير صالح.',
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
