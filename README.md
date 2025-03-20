#  🏘️ Luxor Real State 🏙️

## :bulb:Project proposal

The domain objects in the platform include:

Ad: Represents the published content, such as real estate.
Users:
User: Searches for content in the marketplace.
Client: Publishes ads on the platform.
Both can be the same person, as authentication is not required.
Contact: Allows interaction between a user and an advertiser.

### Requirements:

You can check the project requirements by clicking here:

https://drive.google.com/file/d/190mIQal3642XwrIbp11ZZYPguBp-Of8_/view?usp=sharing

***
## 👁️ Project overview
| Role       | Available Views |
|------------|-----------------|
| Guest 🗣️   | <a href="https://github.com/user-attachments/assets/7487b342-f190-46bb-945a-d7d370250ea8"><img src="https://github.com/user-attachments/assets/7487b342-f190-46bb-945a-d7d370250ea8" width="80"></a> <a href="https://github.com/user-attachments/assets/1ec36da2-b04a-4356-99ea-21c00f9030b0"><img src="https://github.com/user-attachments/assets/1ec36da2-b04a-4356-99ea-21c00f9030b0" width="80"></a> <a href="https://github.com/user-attachments/assets/29e20242-cf2e-4cf8-bf96-55b8e3df28e6"><img src="https://github.com/user-attachments/assets/29e20242-cf2e-4cf8-bf96-55b8e3df28e6" width="80"></a> |
| User 👤    | <a href="https://github.com/user-attachments/assets/fdd2f2bb-100b-406c-b458-5163e0e4000a"><img src="https://github.com/user-attachments/assets/fdd2f2bb-100b-406c-b458-5163e0e4000a" width="80"></a> <a href="https://github.com/user-attachments/assets/52000c78-cbf1-4860-8880-6fef724de747"><img src="https://github.com/user-attachments/assets/52000c78-cbf1-4860-8880-6fef724de747" width="80"></a> <a href="https://github.com/user-attachments/assets/1a1dbfd7-a851-49e0-b6f8-611f2d74c2dd"><img src="https://github.com/user-attachments/assets/1a1dbfd7-a851-49e0-b6f8-611f2d74c2dd" width="80"></a> <a href="https://github.com/user-attachments/assets/18698570-f5a1-461a-a4ea-401d67620ffa"><img src="https://github.com/user-attachments/assets/18698570-f5a1-461a-a4ea-401d67620ffa" width="80"></a> |
| Admin 🛡️  | <a href="https://github.com/user-attachments/assets/afdd61c3-b161-4ce3-9e2d-52df39bac2b8"><img src="https://github.com/user-attachments/assets/afdd61c3-b161-4ce3-9e2d-52df39bac2b8" width="80"></a> <a href="https://github.com/user-attachments/assets/bbff95b5-d04b-4f74-8c67-ccbcc575ec46"><img src="https://github.com/user-attachments/assets/bbff95b5-d04b-4f74-8c67-ccbcc575ec46" width="80"></a> <a href="https://github.com/user-attachments/assets/ae39936a-b1a1-4369-9308-013903d48f7e"><img src="https://github.com/user-attachments/assets/ae39936a-b1a1-4369-9308-013903d48f7e" width="80"></a> <a href="https://github.com/user-attachments/assets/8281dbee-9431-4447-b949-d9e255635bef"><img src="https://github.com/user-attachments/assets/8281dbee-9431-4447-b949-d9e255635bef" width="80"></a> <a href="https://github.com/user-attachments/assets/cfba0c70-0c2e-4a22-8ff1-20e1474496be"><img src="https://github.com/user-attachments/assets/cfba0c70-0c2e-4a22-8ff1-20e1474496be" width="80"></a> <a href="https://github.com/user-attachments/assets/7b58e0ef-3a2d-4d37-a052-a7f02f39ba47"><img src="https://github.com/user-attachments/assets/7b58e0ef-3a2d-4d37-a052-a7f02f39ba47" width="80"></a> <a href="https://github.com/user-attachments/assets/89be2666-50ef-4602-b96b-feb203fda6a9"><img src="https://github.com/user-attachments/assets/89be2666-50ef-4602-b96b-feb203fda6a9" width="80"></a> <a href="https://github.com/user-attachments/assets/4f83e207-a297-4353-83ac-1b14f3e8e1e6"><img src="https://github.com/user-attachments/assets/4f83e207-a297-4353-83ac-1b14f3e8e1e6" width="80"></a> <a href="https://github.com/user-attachments/assets/84cefb0c-50c5-47bf-be16-7a8d6be24c99"><img src="https://github.com/user-attachments/assets/84cefb0c-50c5-47bf-be16-7a8d6be24c99" width="80"></a> |


***
### Project Diagrams (BBDD)

![BBDD Diagram](https://github.com/user-attachments/assets/88612b10-2ed2-443c-bdd7-eb1c52003296)

***
## :scroll: Installation

1.) **Clone** this repository:
```
https://github.com/sr-calcetines/Grupo10_Hackaton_F5.git
```

***
2.) Install **Composer** and **NPM**
```
composer install
```
```
npm install
```

***
3.) **Create** a *.env* file copying everything inside the existing file *.env.example* and **modify** the following **lines**:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=luxor
* DB_USERNAME=root
* DB_PASSWORD=

***
4.) Create a **database** in **MySQL**

***
5.) Now go to the **VSC terminal** and put the following commands:
```
php artisan migrate:fresh 
php artisan migrate:fresh --seed
```
This command will **generate** all the **tables**.

***
6.) Open another terminal in **VSC** and put the following command
```
npm run dev
```

***
7.) Open **another terminal** and **run** the **server** with this command:
```
php artisan serve
```
You'll see an **url** that is going to take you to a website.

>[!IMPORTANT]
>Be sure that your running npm and the server in **DIFFERENT** terminals, **DON'T** close these two terminals and **DON'T** use other commands in these two terminals.

***
### :floppy_disk: Installation requirements
Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

:black_circle: **XAMPP**

:black_circle: Install **Composer**

:black_circle: Install **NPM** in **Node.js**

:black_circle: **Xdebug** (for the tests coverage)

:black_circle: **Postman**

***
## :mag_right:Documentation

### Endpoints
***
#### 🏢 Housing Table
✏️ Create (POST)
`http://127.0.0.1:8000/api/houses/store`

📖 Read (GET)
`http://127.0.0.1:8000/api/houses`

💱 Update (PUT)
`http://127.0.0.1:8000/api/houses/update/{id}`

❌ Destroy (DELETE)
`http://127.0.0.1:8000/api/houses/destroy/{id}`

👁️ Show (GET)
`http://127.0.0.1:8000/api/houses/show/{id}`
***

## :white_check_mark: Tests

> [!IMPORTANT]
> It's important to test the project so we can check if it works correctly and to do that use this command in the **VSC** terminal:

```
php artisan test --coverage
```
![test]()

***
### Coverage

To see the **coverage** you can use this command at the **VSC** terminal:
```
php artisan test --coverage-html=coverage-report
```
> [!IMPORTANT]
> Everytime that you do **new tests** you need to put the command above in the **VSC** terminal, so it can **update** your coverage.
This will add a **folder** called *coverage-report*, go to the folder, go to the *index.html*, and then **open with live server**. After that you should see this page:

![coverage-report]()

***
## Languages and tools
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='html5' src='https://img.shields.io/badge/html-100000?style=for-the-badge&logo=html5&logoColor=white&labelColor=FF8400&color=FF8400'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=079FB0&color=079FB0'/></a>
<a href='https://laravel.com' target="_blank"><img alt='Laravel' src='https://camo.githubusercontent.com/e410fca6849c63adce18d5744836c71a5772b86384130c28c9369df68921e7c0/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f6c61726176656c2d3130303030303f7374796c653d666f722d7468652d6261646765266c6f676f3d6c61726176656c266c6f676f436f6c6f723d464646464646266c6162656c436f6c6f723d36363041304126636f6c6f723d363630413041'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='canva' src='https://img.shields.io/badge/canva-100000?style=for-the-badge&logo=canva&logoColor=white&labelColor=A700FB&color=A700FB'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FF8800&color=FF8800'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://www.figma.com/' target="_blank"><img alt='Figma' src='https://img.shields.io/badge/figma-100000?style=for-the-badge&logo=figma&logoColor=white&labelColor=F24E1E&color=F24E1E'/></a>
<a href='https://react.dev/' target="_blank"><img alt='React' src='https://img.shields.io/badge/react-100000?style=for-the-badge&logo=react&logoColor=white&labelColor=61DAFB&color=61DAFB'/></a>

***
## Figma predesign
If you want to take a look to the mockup of the project click this link:

https://www.figma.com/design/IKlXj9X5BYDDGoik9Tryti/luxuri-inmobiliaria?node-id=0-1
***

***
## Jira Backlog
If you want to take a look to the workflow of the project click this link:

https://pgavilansanc-1736407566716.atlassian.net/jira/software/projects/GHF/boards/4
***

***
## AWS Schemas
If you want to take a look to the AWS Schemas of the project click this link:

https://lucid.app/lucidchart/c3703016-4fa3-4f53-a367-4d4722e1afe5/edit?invitationId=inv_ca47d7ef-00f3-4df1-9f0e-bf366a95f7a6&page=0_0#
***

***
## Flowchart and UML diagram

***

## 👩‍💻 About us  
We are a team of developers participating in a Hackaton organized by "Somos F5".
- [José Ignacio Gavilán Sánchez](https://github.com/sr-calcetines)
- [Carolina Mas Cava](https://github.com/Carocitta)
- [Evelyn Quevedo](https://github.com/evymari)
- [Alberto Vicente Díaz](https://github.com/berto9675)
- [Angelo Gabriel Colmenares Salazar](https://github.com/Anngelooo)
- [Daniel Saldarriaga Villa](https://github.com/SaldaDani)
- [Allan Solorzano](https://github.com/Allan941709)
- [Francisco Fernández](https://github.com/githpaco)
  
