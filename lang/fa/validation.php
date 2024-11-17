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

'accepted' => 'فیلد :attribute باید پذیرفته شود.',
'accepted_if' => 'فیلد :attribute باید پذیرفته شود وقتی :other برابر :value باشد.',
'active_url' => 'فیلد :attribute باید یک URL معتبر باشد.',
'after' => 'فیلد :attribute باید یک تاریخ بعد از :date باشد.',
'after_or_equal' => 'فیلد :attribute باید یک تاریخ بعد یا مساوی با :date باشد.',
'alpha' => 'فیلد :attribute فقط باید شامل حروف باشد.',
'alpha_dash' => 'فیلد :attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد.',
'alpha_num' => 'فیلد :attribute فقط باید شامل حروف و اعداد باشد.',
'array' => 'فیلد :attribute باید یک آرایه باشد.',
'ascii' => 'فیلد :attribute باید فقط شامل کاراکترهای الفبایی و نمادهای تک‌بایتی باشد.',
'before' => 'فیلد :attribute باید یک تاریخ قبل از :date باشد.',
'before_or_equal' => 'فیلد :attribute باید یک تاریخ قبل یا مساوی با :date باشد.',
'between' => [
    'array' => 'فیلد :attribute باید بین :min و :max آیتم داشته باشد.',
    'file' => 'فیلد :attribute باید بین :min و :max کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
    'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
],
'boolean' => 'فیلد :attribute باید صحیح یا غلط باشد.',
'can' => 'فیلد :attribute شامل یک مقدار غیرمجاز است.',
'confirmed' => 'تاییدیه فیلد :attribute مطابقت ندارد.',
'contains' => 'فیلد :attribute فاقد یک مقدار ضروری است.',
'current_password' => 'رمز عبور نادرست است.',
'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
'date_equals' => 'فیلد :attribute باید یک تاریخ مساوی با :date باشد.',
'date_format' => 'فیلد :attribute باید با فرمت :format مطابقت داشته باشد.',
'decimal' => 'فیلد :attribute باید شامل :decimal رقم اعشار باشد.',
'declined' => 'فیلد :attribute باید رد شود.',
'declined_if' => 'فیلد :attribute باید رد شود وقتی :other برابر :value باشد.',
'different' => 'فیلد :attribute و :other باید متفاوت باشند.',
'digits' => 'فیلد :attribute باید :digits رقم باشد.',
'digits_between' => 'فیلد :attribute باید بین :min و :max رقم باشد.',
'dimensions' => 'فیلد :attribute دارای ابعاد تصویر نامعتبر است.',
'distinct' => 'فیلد :attribute دارای یک مقدار تکراری است.',
'doesnt_end_with' => 'فیلد :attribute نباید با یکی از مقادیر زیر پایان یابد: :values.',
'doesnt_start_with' => 'فیلد :attribute نباید با یکی از مقادیر زیر شروع شود: :values.',
'email' => 'فیلد :attribute باید یک آدرس ایمیل معتبر باشد.',
'ends_with' => 'فیلد :attribute باید با یکی از مقادیر زیر پایان یابد: :values.',
'enum' => 'مقدار انتخاب شده برای فیلد :attribute نامعتبر است.',
'exists' => 'مقدار انتخاب شده برای فیلد :attribute نامعتبر است.',
'extensions' => 'فیلد :attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
'file' => 'فیلد :attribute باید یک فایل باشد.',
'filled' => 'فیلد :attribute باید یک مقدار داشته باشد.',
'gt' => [
    'array' => 'فیلد :attribute باید بیشتر از :value آیتم داشته باشد.',
    'file' => 'فیلد :attribute باید بیشتر از :value کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید بیشتر از :value باشد.',
    'string' => 'فیلد :attribute باید بیشتر از :value کاراکتر باشد.',
],
'gte' => [
    'array' => 'فیلد :attribute باید :value آیتم یا بیشتر داشته باشد.',
    'file' => 'فیلد :attribute باید بیشتر یا برابر با :value کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید بیشتر یا برابر با :value باشد.',
    'string' => 'فیلد :attribute باید بیشتر یا برابر با :value کاراکتر باشد.',
],
'hex_color' => 'فیلد :attribute باید یک رنگ هگزادسیمال معتبر باشد.',
'image' => 'فیلد :attribute باید یک تصویر باشد.',
'in' => 'مقدار انتخاب شده برای فیلد :attribute نامعتبر است.',
'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
'integer' => 'فیلد :attribute باید یک عدد صحیح باشد.',
'ip' => 'فیلد :attribute باید یک آدرس IP معتبر باشد.',
'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
'list' => 'فیلد :attribute باید یک لیست باشد.',
'lowercase' => 'فیلد :attribute باید حروف کوچک باشد.',
'lt' => [
    'array' => 'فیلد :attribute باید کمتر از :value آیتم داشته باشد.',
    'file' => 'فیلد :attribute باید کمتر از :value کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید کمتر از :value باشد.',
    'string' => 'فیلد :attribute باید کمتر از :value کاراکتر باشد.',
],
'lte' => [
    'array' => 'فیلد :attribute نباید بیشتر از :value آیتم داشته باشد.',
    'file' => 'فیلد :attribute باید کمتر یا برابر با :value کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید کمتر یا برابر با :value باشد.',
    'string' => 'فیلد :attribute باید کمتر یا برابر با :value کاراکتر باشد.',
],
'mac_address' => 'فیلد :attribute باید یک آدرس MAC معتبر باشد.',
'max' => [
    'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
    'file' => 'فیلد :attribute نباید بیشتر از :max کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute نباید بیشتر از :max باشد.',
    'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
],
'max_digits' => 'فیلد :attribute نباید بیشتر از :max رقم داشته باشد.',
'mimes' => 'فیلد :attribute باید یک فایل از نوع: :values باشد.',
'mimetypes' => 'فیلد :attribute باید یک فایل از نوع: :values باشد.',
'min' => [
    'array' => 'فیلد :attribute باید حداقل :min آیتم داشته باشد.',
    'file' => 'فیلد :attribute باید حداقل :min کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید حداقل :min باشد.',
    'string' => 'فیلد :attribute باید حداقل :min کاراکتر باشد.',
],
'min_digits' => 'فیلد :attribute باید حداقل :min رقم داشته باشد.',
'missing' => 'فیلد :attribute باید ناپدید باشد.',
'missing_if' => 'فیلد :attribute باید ناپدید باشد وقتی :other برابر :value باشد.',
'missing_unless' => 'فیلد :attribute باید ناپدید باشد مگر اینکه :other برابر :value باشد.',
'missing_with' => 'فیلد :attribute باید ناپدید باشد وقتی :values حاضر باشد.',
'missing_with_all' => 'فیلد :attribute باید ناپدید باشد وقتی :values حاضر باشند.',
'multiple_of' => 'فیلد :attribute باید ضریبی از :value باشد.',
'not_in' => 'مقدار انتخاب شده برای فیلد :attribute نامعتبر است.',
'not_regex' => 'فرمت فیلد :attribute نامعتبر است.',
'numeric' => 'فیلد :attribute باید یک عدد باشد.',
'password' => [
    'letters' => 'فیلد :attribute باید حداقل یک حرف داشته باشد.',
    'mixed' => 'فیلد :attribute باید حداقل یک حرف بزرگ و یک حرف کوچک داشته باشد.',
    'numbers' => 'فیلد :attribute باید حداقل یک عدد داشته باشد.',
    'symbols' => 'فیلد :attribute باید حداقل یک نماد داشته باشد.',
    'uncompromised' => 'فیلد :attribute در یک نشت داده‌ها وجود داشته است. لطفاً یک :attribute دیگر انتخاب کنید.',
],
'present' => 'فیلد :attribute باید حاضر باشد.',
'present_if' => 'فیلد :attribute باید حاضر باشد وقتی :other برابر :value باشد.',
'present_unless' => 'فیلد :attribute باید حاضر باشد مگر اینکه :other برابر :value باشد.',
'present_with' => 'فیلد :attribute باید حاضر باشد وقتی :values حاضر باشد.',
'present_with_all' => 'فیلد :attribute باید حاضر باشد وقتی :values حاضر باشند.',
'prohibited' => 'فیلد :attribute ممنوع است.',
'prohibited_if' => 'فیلد :attribute ممنوع است وقتی :other برابر :value باشد.',
'prohibited_unless' => 'فیلد :attribute ممنوع است مگر اینکه :other برابر :values باشد.',
'prohibits' => 'فیلد :attribute حضور :other را ممنوع می‌کند.',
'regex' => 'فرمت فیلد :attribute نامعتبر است.',
'required' => 'فیلد :attribute الزامی است.',
'required_array_keys' => 'فیلد :attribute باید شامل ورودی‌هایی برای: :values باشد.',
'required_if' => 'فیلد :attribute الزامی است وقتی :other برابر :value باشد.',
'required_if_accepted' => 'فیلد :attribute الزامی است وقتی :other پذیرفته شده باشد.',
'required_if_declined' => 'فیلد :attribute الزامی است وقتی :other رد شده باشد.',
'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other برابر :values باشد.',
'required_with' => 'فیلد :attribute الزامی است وقتی :values حاضر باشد.',
'required_with_all' => 'فیلد :attribute الزامی است وقتی :values حاضر باشند.',
'required_without' => 'فیلد :attribute الزامی است وقتی :values حاضر نباشد.',
'required_without_all' => 'فیلد :attribute الزامی است وقتی هیچ‌یک از :values حاضر نباشند.',
'same' => 'فیلد :attribute و :other باید مطابقت داشته باشند.',
'size' => [
    'array' => 'فیلد :attribute باید شامل :size آیتم باشد.',
    'file' => 'فیلد :attribute باید :size کیلوبایت باشد.',
    'numeric' => 'فیلد :attribute باید :size باشد.',
    'string' => 'فیلد :attribute باید :size کاراکتر باشد.',
],
'starts_with' => 'فیلد :attribute باید با یکی از مقادیر زیر شروع شود: :values.',
'string' => 'فیلد :attribute باید یک رشته باشد.',
'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
'unique' => 'فیلد :attribute قبلاً استفاده شده است.',
'uploaded' => 'بارگذاری فیلد :attribute با شکست مواجه شد.',
'uppercase' => 'فیلد :attribute باید حروف بزرگ باشد.',
'url' => 'فیلد :attribute باید یک URL معتبر باشد.',
'ulid' => 'فیلد :attribute باید یک ULID معتبر باشد.',
'uuid' => 'فیلد :attribute باید یک UUID معتبر باشد.',

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
        'rule-name' => 'پیام سفارشی',
    ],
],

/*
|--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
|
| The following language lines are used to swap our attribute placeholder
| with something more reader friendly such as "E-Mail Address" instead
| of "email". This simply helps us make our message more expressive.
|
*/

'attributes' => [
	'education' => 'تحصیلات ',
    'old' => 'سن ',
    'gender' => 'جنسیت ',
    'marital_status' => 'وضعیت تاهل ',
    'number_phone' => 'شماره همراه ',
    'income' => 'میزان درآمد',
    'job' => 'شغل',
],

];
