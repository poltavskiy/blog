# Laravel PHP blog
**Как получить себе копию?**

1. Клонируем репозиторий _git clone `https://github.com/Enakoneschniy/laravel-blog.git` blog.local_

2. Устанавливаем зависимости _composer install_

3. Создаем файл .env

4. Копируем в него содержимое файла .env.example и прописываем свои настройки подключения к бд.

5. Выполнить команду _php artisan key:generate_

6. Откатить все миграции и заново их выполнить. команда _php artisan migrate:refresh_

7. Заполнить таблици тестовыми данными выполнив команду _php artisan db:seed --class=DatabaseSeeder_

8. Активипуем адмику командой _php artisan vendor:publish_
  
 Чтобы попасть в админку водите под пользователем:
  
  **_Email `admin@admin.com`_**
  
  **_ Пароль: admin_**
 
 _Для пользователей linux. Еще необходимо дать права на папку storage.
 Если не настроины хосты то настроить хост. Точка входа - папка public_
