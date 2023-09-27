<?php 

return [
    'plugin' => [
        'name' => 'کاربر',
        'description' => 'مدیریت کاربران',
        'tab' => 'کاربران',
        'access_users' => 'مدیریت کاربران',
        'access_groups' => 'مدیریت گروه‌های کاربران',
        'access_settings' => 'مدیریت تنطیمات کاربران',
        'impersonate_user' => 'از دید کاربران'
    ],
    'users' => [
        'menu_label' => 'کاربران',
        'all_users' => 'همه کاربران',
        'new_user' => 'کاربر جدید',
        'list_title' => 'مدیریت کاربران',
        'trashed_hint_title' => 'کاربر حساب خود را غیر فعال کرده است',
        'trashed_hint_desc' => 'این کاربر حساب خود را غیر فعال کرده است و علاقه ای به ادامه فعالیت در سایت را ندارد. کاربران با ورود مجدد به سایت میتوانند حساب خود را فعال کنند.',
        'banned_hint_title' => 'حساب کاربری مسدود است',
        'banned_hint_desc' => 'حساب این کاربر توسط مدیر مسدود است و نمی تواند به سیستم وارد شود',
        'guest_hint_title' => 'این کاربر مهمان است',
        'guest_hint_desc' => 'این کاربر برای مرجع دهی ثبت شده است باید ثبت نام و وارد سیستم شود.',
        'activate_warning_title' => 'کاربر فعال نمیباشد!',
        'activate_warning_desc' => 'این کاربر فعال نشده است و نمیتواند وارد سایت شود.',
        'activate_confirm' => 'آیا از فعالسازی این کاربر اطمینان دارید؟',
        'activated_success' => 'کاربر با موفقیت فعال شد.',
        'activate_manually' => 'فعال سازی دستی این کاربر',
        'convert_guest_confirm' => 'تبدیل این کاربر به مهمان؟',
        'convert_guest_manually' => 'تبدیل به کاربر ثبت نام شده',
        'convert_guest_success' => 'کارب به حالت ثبت نام شده تغییر پیدا کرد',
        'impersonate_user' => 'استفاده از  هویت کاربر',
        'impersonate_confirm' => 'از هویت این کاربر استفاده می کنید؟ با خروج می توانید به حالت قبل برگردید',
        'impersonate_success' => 'شما اکنون با هویت این کاربر وارد شده اید',
        'delete_confirm' => 'آیا از حذف این کاربر اطمینان دارید؟',
        'unban_user' => 'رفع انتسداد حساب کاربری',
        'unban_confirm' => 'آیا از رفع انسداد حساب کاربری این شخص اطمینان دارید؟',
        'unbanned_success' => 'حساب کاربری رفع انسداد شد',
        'return_to_list' => 'بازگشت به لیست کاربران',
        'update_details' => 'ویرایش جزئیات',
        'bulk_actions' => 'اعمال گروهی',
        'delete_selected' => 'حذف انتخاب شده',
        'delete_selected_confirm' => 'آیا از حذف کاربران انتخاب شده اطمینان داری؟',
        'delete_selected_empty' => 'کاربری جهت حذف انتخاب نشده است.',
        'activate_selected' => 'فعال سازی انتخاب شده',
        'activate_selected_confirm' => 'فعال سازی کاربر انتخاب شده؟',
        'activate_selected_empty' => 'کاربری جهت فعال سازی انتخاب نشده است',
        'activate_selected_success' => 'کاربر انتخاب شده با موفقیت فعال شد',
        'delete_selected_success' => 'کاربران انتخاب شده با موفقیت حذف شدند.',
        'deactivate_selected' => 'غیر فعال سازی انتخاب شده',
        'deactivate_selected_confirm' => 'کاربران انتخاب شده غیرفعال شوند؟',
        'deactivate_selected_empty' => 'کاربری برای غیر فعال سازی انتخاب نشده است',
        'deactivate_selected_success' => 'کاربران انتخاب شده با موفقیت غیرفعال شدند',
        'restore_selected' => 'بازسازی انتخاب شده ها',
        'restore_selected_confirm' => 'کاربرانت انتخاب شده بازسازی شوند؟',
        'restore_selected_empty' => 'کاربری برای بازسازی انتخاب نشده',
        'restore_selected_success' => 'کاربران انتخاب شده با موفقیت بازسازی شدند',
        'ban_selected' => 'مسدود کردن انتخاب شده ها',
        'ban_selected_confirm' => 'کاربران انتخاب شده مسدود شوند؟',
        'ban_selected_empty' => 'کاربری برای اسنداد حساب انتخاب نشده است',
        'ban_selected_success' => 'حساب کاربران انتخاب شده با موفقیت مسدود شد',
        'unban_selected' => 'رفع انسداد انتخاب شده ها',
        'unban_selected_confirm' => 'کاربران انتخاب شده رفع انسداد شوند؟',
        'unban_selected_empty' => 'کاربری برای رفع انسداد انتخاب نشده است',
        'unban_selected_success' => 'کاربران انتخاب شده با موفقیت رفع انسداد شدند',
        'unsuspend_success' => 'کاربر لغو تعلیق شده است',
        'unsuspend_confirm' => 'این کاربر لغو تعلیق شود؟'
    ],
    'settings' => [
        'users' => 'کاربران',
        'menu_label' => 'تنظیمات کاربران',
        'menu_description' => 'مدیریت تنظیمات مربوط به کاربر.',
        'activation_tab' => 'فعال سازی',
        'signin_tab' => 'ورود',
        'registration_tab' => 'ایجاد حساب کاربری',
        'profile_tab' => 'Profile',
        'notifications_tab' => 'هشدار ها',
        'allow_registration' => 'به کاربران اجازه ثبت نام داده شود.',
        'allow_registration_comment' => 'اگر این گزینه غیر فعال باشد حساب کاربری فقط توسط مدیران میتواند ایجاد شود.',
        'activate_mode' => 'روش فعال سازی',
        'activate_mode_comment' => 'روشی را که میخواهید حساب های کاربری از آن طریق فعال شوند را انتخاب نمایید.',
        'activate_mode_auto' => 'خودکار',
        'activate_mode_auto_comment' => 'بهنگام ثبت نام حساب کاربری به صورت خودکار فعال شود.',
        'activate_mode_user' => 'کاربر',
        'activate_mode_user_comment' => 'کاربران حساب خود را از طریق ایمیل فعال نمایند.',
        'activate_mode_admin' => 'مدیریت',
        'activate_mode_admin_comment' => 'فقط مدیران حساب کاربری را فعال نمایید.',
        'require_activation' => 'ورود نیاز مند فعال سازی حساب کاربری می باشد',
        'require_activation_comment' => 'کاربران باید دارای حساب کاربری فعال جهت ورود باشند.',
        'use_throttle' => 'جلو گیری از ورود',
        'use_throttle_comment' => 'تکرار ورود نا موفق کاربر را به طور موقت غیر فعال میکند.',
        'login_attribute' => 'مشخصه ی ورود',
        'login_attribute_comment' => 'مشخصه ای را که کاربر برای ورود باید وارد نماید انتخاب نمایید.',
        'block_persistence' => 'جلوگیری از نشست های همزمان ',
        'block_persistence_comment' => 'وقتی کاربران فعال هستند نمی توانند همزمان به چندین دستگاه وارد شوند.',
        'login_attribute' => 'ویژگی ورود',
        'login_attribute_comment' => 'انتخاب کنید که چه جزئیات کاربر اصلی باید برای ورود به سیستم استفاده شود.',
        'remember_login' => 'حالت ورود را به خاطر بسپارید',
        'remember_login_comment' => 'انتخاب کنید که آیا جلسه کاربر باید دائمی باشد.',
        'remember_always' => 'همیشه',
        'remember_never' => 'هرگز',
        'remember_ask' => 'از کاربر در هنگام ورود بپرسید',
    ],
    'user' => [
        'label' => 'کاربر',
        'id' => 'مشخصه',
        'username' => 'نام کاربری',
        'name' => 'نام',
        'name_empty' => 'ناشناس',
        'surname' => 'نام خانوادگی',
        'email' => 'پست الکترونیکی',
        'created_at' => 'تاریخ ثبت نام',
        'last_seen' => 'آخرین بازدید',
        'is_guest' => 'مهمان',
        'joined' => 'عضو شده',
        'is_online' => 'آنلاین',
        'is_offline' => 'هم اکنون آفلاین',
        'send_invite' => 'ارسال دعوت نامه با ایمیل',
        'send_invite_comment' => 'ارسال ایمیل خوش آمد شامل رمز عبور و نام کاربری',
        'create_password' => 'ساخت رمزعبور',
        'create_password_comment' => 'رمز جدید برای استفاده کاربر در زمان ورود را وارد کنید',
        'reset_password' => 'تنظیم مجدد کلمه عبور',
        'reset_password_comment' => 'جهت تنظیم مجدد کلمه عبور کاربر ، کلمه عبور جدید را وارد نمایید.',
        'confirm_password' => 'تایید کلمه عبور',
        'confirm_password_comment' => 'جهت تایید کلمه عبور را مجددا وارد نمایید.',
        'groups' => 'گرو ها',
        'empty_groups' => 'گروه کاربری موجود نیست',
        'avatar' => 'نمایه',
        'details' => 'جزییات',
        'account' => 'حساب کاربری',
        'block_mail' => 'هیچ ایمیلی به این کاربر ارسال نشود',
        'status_guest' => 'مهمان',
        'status_activated' => 'فعال',
        'status_registered' => 'ثبت نام شده',
        'created_ip_address' => 'ایجاد آدرس آی پی',
        'last_ip_address' => 'آخرین آی پی آدرس',
    ],
    'group' => [
        'label' => 'گروه',
        'id' => 'مشخصه',
        'name' => 'نام',
        'description_field' => 'توضیحات',
        'code' => 'کد یکتا',
        'code_comment' => 'کد یکتایی را جهت دسترسی به این گروه وارد نمایید',
        'created_at' => 'تاریخ ایجاد',
        'users_count' => 'کاربران',
    ],
    'groups' => [
        'menu_label' => 'گروه ها',
        'all_groups' => 'گروه های کاربر',
        'new_group' => 'گروه جدید',
        'delete_selected_confirm' => 'آیا از حذف گروه های انتخاب شده اطمینان دارید؟',
        'list_title' => 'مدیریت گروه ها',
        'delete_confirm' => 'آیا از حذف این گروه اطمینان دارید؟',
        'delete_selected_success' => 'گروه های انتخاب شده با موفقیت حذف شدند.',
        'delete_selected_empty' => 'گروهی جهت حذف انتخاب نشده است.',
        'return_to_list' => 'بازگشت به لیست گروه ها',
        'return_to_users' => 'بازگشت به لیست کاربران',
        'create_title' => 'ایجاد گروه کاربری جدید',
        'update_title' => 'ویرایش گروه کاربری',
        'preview_title' => 'پیش نمایش گروه کاربری',
    ],
    'login' => [
        'attribute_email' => 'پست الکترونیکی',
        'attribute_username' => 'نام کاربری',
    ],
    'account' => [
        'account' => 'حساب کاربری',
        'account_desc' => 'فرم مدیریت کاربران.',
        'banned' => 'با عرض پوزش، این کاربر در حال حاضر فعال نیست. لطفا برای راهنمایی بیشتر با ما تماس بگیرید.',
        'redirect_to' => 'انتقال به',
        'redirect_to_desc' => 'نام صفحه ای که کاربر پس از ورود باید به آن صفحه منتقل شود.',
        'code_param' => 'پارامتر کد فعال سازی',
        'code_param_desc' => 'پارامتر آدرس صفحه جهت استفاده در کد فعال سازی بهنگام ثبت نام',
        'force_secure' => 'اجباری کردن پروتکل ایمن',
        'force_secure_desc' => 'همیشه URL را با طرح HTTPS تغییر مسیر دهید.',
        'invalid_user' => 'کاربری با اطلاعات وارد شده یافت نشد.',
        'invalid_activation_code' => 'مد فعالسازی معتبر نمیباشد',
        'invalid_deactivation_pass' => 'کلمه عبور وارد شده صحیح نمی باشد.',
        'invalid_current_pass' => 'رمز عبور فعلی که وارد کردید نامعتبر بود.',
        'success_activation' => 'حساب کاربری شما با موفقیت فعال شد.',
        'success_deactivation' => 'حساب شما با موفقیت غیر فعال شد. از رفتن شما متاسفیم.',
        'success_saved' => 'تنظیمات با موفقیت اعمال شدند.',
        'login_first' => 'شما باید وارد حساب کاربری خود شوید!',
        'already_active' => 'حساب کاربری شما قبلا فعال شده است!',
        'activation_email_sent' => 'یک پست الکترونیکی حاوی آدرس فعال سازی به ایمیل شما ارسال شد.',
        'activation_by_admin' => 'شما با موفقیت ثبت نام کردید. حساب شما هنوز فعال نیست و باید توسط یک مدیر تایید شود.',
        'registration_disabled' => 'در حال حاظر سرویس ثبت نام فعال نمی باشد.',
        'registration_throttled' => 'ثبت نام متوقف شده است. لطفاً بعداً دوباره امتحان کنید.',
        'sign_in' => 'ورود',
        'register' => 'ثبت نام',
        'full_name' => 'نام کامل',
        'email' => 'پست الکترونیکی',
        'password' => 'کلمه عبور',
        'login' => 'نام کاربری',
        'new_password' => 'کلمه عبور جدید',
        'new_password_confirm' => 'تایید کلمه عبور',
        'update_requires_password' => 'تایید رمز عبور در به روز رسانی',
        'update_requires_password_comment' => 'هنگام تغییر نمایه کاربر، رمز عبور فعلی را ملزم کنید.'
    ],
    'reset_password' => [
        'reset_password' => 'بازنشانی کلمه عبور',
        'reset_password_desc' => 'فرم کلمه عبور فراموش شده.',
        'code_param' => 'پارامتر کد بازنشانی',
        'code_param_desc' => 'پارامتر آدرس صفحه ای که جهت کد بازنشانی استفاده خوهد شد',
    ],
    'session' => [
        'session' => 'جلسه',
        'session_desc' => 'جلسه کاربری را به صفحه جهت دسترسی کاربران اضافه می کند.',
        'security_title' => 'دسترسی برای',
        'security_desc' => 'چه کسانی میتوانند به این صفحه دسترسی داشته باشند؟',
        'all' => 'همه',
        'users' => 'کاربران',
        'guests' => 'میهمان ها',
        'allowed_groups_title' => 'همه گروه ها',
        'allowed_groups_description' => 'گروه های مجاز یا هیچکدام را برای اجازه دادن به همه گروه ها انتخاب کنید',
        'redirect_title' => 'انتقال به',
        'redirect_desc' => 'نام صفحه‌ای که در صورت عدم اجازه دسترسی کاربر به آن انتقال پیدا می‌کند.',
        'logout' => 'با موفقیت از سیستم خارج شدید!',
        'stop_impersonate_success' => 'دیگر در نقشِ سایر کاربران نیستید.',
    ],
];
