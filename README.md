**Rasyid Sabillillah | IT-0202 | 1202190009**

## Phase 1  | How To Install Laravel 9 on Windows

<details> <summary> Required XAMPP for Windows</summary>

### Install from www.apachefriends.org
- [Installer XAMPP](https://www.apachefriends.org/xampp-files/8.1.6/xampp-windows-x64-8.1.6-0-VS16-installer.exe)    `Windows 2008, 2012, Vista, 7, 8 (Important: XP or 2003 not supported`
    
    **Component Install**: MySQL, phpMyAdmin

</details>

<details> <summary> Required Composer for Windows</summary>

- [Installer Composer](https://getcomposer.org/Composer-Setup.exe)
- After downloading the Composer file, open the file and follow the installation instructions below: 
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_1.png?raw=true"></p>
   First, a page like the one in the image above will appear. Click Next to continue with the installation process.
- Make sure to select the installation location Composer running at C:\xampp\php\php.exe. Click Next if the php file location is correct.
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_2.png?raw=true"></p>
- After that, you'll be asked if you want to utilize a proxy or not. Click the button and input your proxy URL if you want to use one. If you don't wish to use a proxy, proceed with the installation by clicking Next.
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_3.png?raw=true"></p>
- Next, double-check that the installation process is operating in the correct directory, which is C:xamppphpphp.exe. If everything seems good, click Install. The next screen displays a notification that the Windows environment has changed. This modification makes it possible to run Composer from the Command Prompt.
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_4.png?raw=true"></p>
- When the installation is finished, close the Composer installation window by clicking Finish.
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_5.png?raw=true"></p>
- Following the completion of the Composer installation, use the Command Prompt to verify the Composer installation. The key is to press Win + R, type cmd, and then click Ok. 
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/cmd.png?raw=true"></p>
- After that, you'll be taken to the Command Prompt window. To see if the installation was successful, run the command below.
   <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_6.png?raw=true"></p>
   Your installation was successful if it looks like the image above.
</details>
<br>

- **Make sure you have installed composer and xampp.**
- Entering the Command Prompt is the first step in installing Laravel. The trick is to press Win+R, type cmd, and then press OK.
  <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/cmd.png?raw=true"></p>
- Navigate to the file server directory in Command Prompt or Terminal before installing Laravel. On XAMPP, the file server is located in the xampp/htdocs directory by default. To get to the htdocs directory, type this command in the Command Prompt window.
    ```
    cd \xampp\htdocs 
    ```  
    <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_7.png?raw=true"></p>
- Before you install Laravel, go to the file server directory using Command Prompt or Terminal. The xampp/htdocs directory is the default location for the file server in XAMPP. To get to the htdocs directory, type this command in the Command Prompt window.
    ```
    composer create-project --prefer-dist laravel/laravel project_name 
    ```  
    Composer will begin the process of gathering data and installing Laravel into the directory you chose if the command was successfully entered. Ensure that your internet connection is reliable so that the Laravel data retrieval procedure goes without a hitch.
    <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_8.png?raw=true"></p>
- After the Laravel file download is complete, a new folder with the same name as the project name you provided in the /xampp/htdocs folder will appear in the file server directory.
  <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_9.png?raw=true"></p>
- Navigate to the directory you created earlier in Command Prompt or Terminal to confirm that Laravel is successfully installed and ready to use.
    ```
    cd project_name
    ```  
    Then, at the Command Prompt or Terminal, type the following command:
    ```
    php artisan serve
    ```  
    <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_10.png?raw=true"></p>
- The next step is to open the link supplied by Laravel if it indicates Laravel development server started in the Command Prompt or Terminal. By default, you'll be sent to 127.0.0.1:8000, which is the server address. A homepage with Laravel writing in the center will appear later, as illustrated in the image below:
  <p align="center"><img src= "https://github.com/acid99/Integratif-Rasyid_Sabillillah-1202190009/blob/main/assets/laravel/Screenshot_11.png?raw=true"></p>
  If it looks like the image above, your Laravel installation was successful^^

## Phase 2  | Rss and Database 

- Open XAMPP Control Panel, and start the Module MySQL and Apache.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_0.png?raw=true"></p>
- Create Database with project_name or anything you want.
- Dont forget to run laravel project with code on terminal with path C:\xampp\htdocs\project_name, dont close that terminal.
    ```
    php artisan serve
    ```  
- Open and edit file .env on your folder project_name, change DB_DATABASE with your database created before.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_1.png?raw=true"></p>
- Open other Terminal. And type like this, for make sure connect your laravel project with database. 
    ```
    php artisan migrate
    ```  
    if you getting error, solve first, and run with
    ```
    php artisan migrate:fresh
    ```  
- If you don't find an error in the terminal, it means that the laravel project  has been connected to your database.
- Create file Rss and News Table on Database.
    ```
   php artisan make:migration create_rss_table
   php artisan make:migration create_news_table
    ```  
- After that, open that files on your laravel project folder (database/migrations/), and changes like this to change the table structure that has been created.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_2.png?raw=true"></p>
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_3.png?raw=true"></p>
- Open DatabaseSeeder.php and RssSeeder.php on database/seeders, and changes like this for fill in website on table rss at database.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_4.png?raw=true"></p>
- Run command on terminal like this, for register the files changed before.
    ```
    php artisan db:seed
    ```  
- And then it will appear as below (**register db seed all sites one by one**).
      <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_4_1.png?raw=true"></p>
- Create Model Rss with seed and controller, and create Model News with controller.
    ```
   php artisan make:model Rss -seed --controller
   php artisan make:model News --controller
    ```
- Dont forget change file model Rss and News on app/Models, for what kind of table to on database.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_6.png?raw=true"></p>
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_5.png?raw=true"></p>
- Edit file NewsController.php on app/Http/Controllers, for parsing xml object on our database.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_7.png?raw=true"></p>
- Edit file route web.php on routes folder, for to be able open a link based on the rss id that we registered before.
    <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/step/Screenshot_8.png?raw=true"></p>
- Check on browser sites one by one.
- Site Bola ([click here](https://www.bola.net/feed/)).
  
  Aggregate/1
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_1.png?raw=true"></p>
  Rss_id/1
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_2.png?raw=true"></p>

- Site CNBC Indonesia Market ([click here](https://www.cnbcindonesia.com/market/rss/)).
  
  Aggregate/2
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_3.png?raw=true"></p>
  Rss_id/2
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_4.png?raw=true"></p>

- Site Kumparan ([click here](https://lapi.kumparan.com/v2.0/rss/)).
  
  Aggregate/3
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_5.png?raw=true"></p>
  Rss_id/3
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_6.png?raw=true"></p>

- 3 Sites in Database Table News.
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%202/Screenshot_7.png?raw=true"></p>


## Phase 3  | Homepage

- Site Bola from rss_id/1 **changed** to CNBC Indonesia Technology (same rss_id/1), because images url from Site Bola not even showing at all from homepage.
  
- Make 4 Files in resources/views, with name welcome.blade.php, tech.blade.php, market.blade.php, and berita.blade.php.
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_1.png?raw=true"></p>
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_2.png?raw=true"></p>
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_3.png?raw=true"></p>
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_4.png?raw=true"></p>

- Make 4 Files in app/Http/Controllers, with name FeedController.php (contains about rss 1,2,3 / mix), TcController.php (contains about rss 1), MkController.php(contains about rss 2), and BrController.php (contains about rss 3).
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_5.png?raw=true"></p>
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_6.png?raw=true"></p>
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_7.png?raw=true"></p>
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_8.png?raw=true"></p>

- Edit File in directory app/routes/web.php, like images below (for pages address)
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/Screenshot_9.png?raw=true"></p>

- Homepage from 127.0.0.0:8000
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/home.png?raw=true"></p>

- CNBC Indonesia Technology from 127.0.0.0:8000/tech
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/tech.png?raw=true"></p>

- CNBC Indonesia Market from 127.0.0.0:8000/market
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/market.png?raw=true"></p>

- Kumparan from 127.0.0.0:8000/berita
  <p align="center"><img src= "https://github.com/acid99/Integratif--Rasyid_Sabillillah--1202190009-/blob/main/assets/progress%203/berita.png?raw=true"></p>
