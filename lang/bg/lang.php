<?php

return [
    'plugin' => [
        'name' => 'Блог',
        'description' => 'Стабилната блог платформа.',
    ],
    'blog' => [
        'menu_label' => 'Блог',
        'menu_description' => 'управление на публикациите',
        'posts' => 'публикации',
        'create_post' => 'създай публикация',
        'categories' => 'категории',
        'create_category' => 'създай категория',
        'tab' => 'Блог',
        'access_posts' => 'управление на публикациите',
        'access_categories' => 'управление на категории',
        'access_other_posts' => 'управление на други потребители публикации в блога',
        'delete_confirm' => 'Сигурни ли сте?',
        'chart_published' => 'Публикувано',
        'chart_drafts' => 'Чернови',
        'chart_total' => 'Общо',
        'access_import_export' => 'rainlab.blog::lang.blog.access_import_export',
        'access_publish' => 'rainlab.blog::lang.blog.access_publish',
    ],
    'posts' => [
        'list_title' => 'Управление публикациите в блога',
        'filter_category' => 'Категория',
        'filter_published' => 'Скрий публикуваните',
        'new_post' => 'Нова публикация',
        'import_post' => 'rainlab.blog::lang.posts.import_post',
        'export_post' => 'rainlab.blog::lang.posts.export_post',
        'filter_date' => 'rainlab.blog::lang.posts.filter_date',
    ],
    'post' => [
        'title' => 'Заглавие',
        'title_placeholder' => 'Ново заглавие на публикацията',
        'slug' => 'Slug',
        'slug_placeholder' => 'нов slug на публикацията',
        'categories' => 'Категории',
        'created' => 'Създаден',
        'updated' => 'Обновен',
        'published' => 'Публикуван',
        'published_validation' => 'Моля, посочете дата на публикуване',
        'tab_edit' => 'Промяна',
        'tab_categories' => 'Категории',
        'categories_comment' => 'Изберете категории към който пренадлежи публикацията ',
        'categories_placeholder' => 'Няма категирии, Създайте първата?!',
        'tab_manage' => 'Управление',
        'published_on' => 'публикувано в',
        'excerpt' => 'Откъс',
        'featured_images' => 'Избрани снимки',
        'delete_confirm' => 'Наистина ли искате да изтриете тази публикация?',
        'close_confirm' => 'Публикацията не е запазена.',
        'return_to_posts' => 'Върни ме към всички публикации',
        'content' => 'rainlab.blog::lang.post.content',
        'author_email' => 'rainlab.blog::lang.post.author_email',
        'created_date' => 'rainlab.blog::lang.post.created_date',
        'updated_date' => 'rainlab.blog::lang.post.updated_date',
        'published_date' => 'rainlab.blog::lang.post.published_date',
        'content_html' => 'rainlab.blog::lang.post.content_html',
    ],
    'categories' => [
        'list_title' => 'Управление категориите в блога',
        'new_category' => 'Нова категория',
        'uncategorized' => 'Без категория',
    ],
    'category' => [
        'name' => 'Име',
        'name_placeholder' => 'Ново име на категорията',
        'slug' => 'Slug',
        'slug_placeholder' => 'нов slug на категотията',
        'posts' => 'публикации',
        'delete_confirm' => 'Наистина ли искате да изтриете тази категория?',
        'return_to_categories' => 'Върни ме към всички категории',
        'reorder' => 'rainlab.blog::lang.category.reorder',
        'color' => 'rainlab.blog::lang.category.color',
        'icon' => 'rainlab.blog::lang.category.icon',
        'description' => 'rainlab.blog::lang.category.description',
    ],
    'settings' => [
        'category_title' => 'Списък с категории',
        'category_description' => 'Показва списък с категориите на блога.',
        'category_slug' => 'категория slug',
        'category_slug_description' => 'Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.',
        'category_display_empty' => 'Показване на празни категории',
        'category_display_empty_description' => 'Показване на категории, които нямат никакви публикации.',
        'category_page' => 'Страница на категория',
        'category_page_description' => 'Име на страницата за категирия. Това се използва подразбиране от компонента.',
        'post_title' => 'Публикация',
        'post_description' => 'Показване на Публикациите в блога на страницата.',
        'post_slug' => 'Post slug',
        'post_slug_description' => 'Търсене на публикации по зададен slug.',
        'post_category' => 'Страница за Категория',
        'post_category_description' => 'Име на страница за категория за генериране на линк.Това се използва подразбиране от компонента.',
        'posts_title' => 'Лист с Публикации',
        'posts_description' => 'Показване на лист с публикации на страницата.',
        'posts_pagination' => 'Номер на страницата',
        'posts_pagination_description' => 'Тази стойност се използва за определяне на коя страница е потребителя.',
        'posts_filter' => 'Филтер Категория',
        'posts_filter_description' => 'Въведи slug на категория или URL адрес за филтриране по. Оставете празно за да се покажат всички публикации.',
        'posts_per_page' => 'Публикации на страница',
        'posts_per_page_validation' => 'Невалиден формат за публикации на страница',
        'posts_no_posts' => 'Няма публикации',
        'posts_no_posts_description' => 'Съобщение което да се покаже, в случай ,че няма публикации за показване.Това се използва подразбиране от компонента.',
        'posts_order' => 'подреждане на публикации',
        'posts_order_description' => 'Атрибут по който да бъдат подредени публикациите',
        'posts_category' => 'страница на категориите',
        'posts_category_description' => 'Име на страницата за категории , за "публикувано в". Това се използва подразбиране от компонента.',
        'posts_post' => 'Post page',
        'posts_post_description' => 'Име на страницата за публикации "Прочетете повече". Това се използва подразбиране от компонента.',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
        'posts_order_type' => 'rainlab.blog::lang.settings.posts_order_type',
        'posts_order_type_description' => 'rainlab.blog::lang.settings.posts_order_type_description',
        'history_mode' => 'rainlab.blog::lang.settings.history_mode',
        'history_mode_description' => 'rainlab.blog::lang.settings.history_mode_description',
        'rssfeed_title' => 'rainlab.blog::lang.settings.rssfeed_title',
        'rssfeed_description' => 'rainlab.blog::lang.settings.rssfeed_description',
        'rssfeed_blog' => 'rainlab.blog::lang.settings.rssfeed_blog',
        'rssfeed_blog_description' => 'rainlab.blog::lang.settings.rssfeed_blog_description',
    ],
    'menuitem' => [
        'blog_category' => 'rainlab.blog::lang.menuitem.blog_category',
        'all_blog_categories' => 'rainlab.blog::lang.menuitem.all_blog_categories',
        'blog_post' => 'rainlab.blog::lang.menuitem.blog_post',
        'all_blog_posts' => 'rainlab.blog::lang.menuitem.all_blog_posts',
        'category_blog_posts' => 'rainlab.blog::lang.menuitem.category_blog_posts',
    ],
];