# Todo-list

## Mandatory Prerequisites :

Install PHP version 7.4 or higher and ensure the following extensions are installed :

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) 
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- [mysqli](https://www.php.net/manual/fr/mysqli.setup.php)


## Context :

To familiarize myself with the CodeIgniter 4 framework, I created a first project called "Todo-list," which allows listing tasks to do.

CodeIgniter 4 is a PHP framework that follows the MVC (Model-View-Controller) architecture :

- Model : Business logic classes.
- View : HTML pages.
- Controller: Project methods (event handlers).
- Dao : Classes for database access.


MVC Diagram :

!['img/MVC.png'](img/MVC.png)

### Use Case :

!['img/f2.png'](img/f15.png)

index page :

!['img/f1.png'](img/f1.PNG)

Users can reorder tasks by clicking the following button :

!['img/f2.png'](img/f2.PNG)

Page to Modify Task Order (Tasks are displayed in ascending order) :

!['img/f3.png'](img/f3.PNG)

Here, the position of the task "éteindre le pc" is swapped with the task "Ranger" :

!['img/f4.png'](img/f4.PNG)

Result :

!['img/f5.png'](img/f5.PNG)

Adding a New Task Click on the following button :

!['img/f10.png'](img/f10.PNG)

Fill out the form to add the task :

!['img/f7.png'](img/f7.PNG)

!['img/f8.png'](img/f8.PNG)

The new task is successfully added. To edit it, click the gray button :

!['img/f9.png'](img/f9.PNG)

Edit Form :

!['img/11.png'](img/f11.PNG)

The task is successfully updated.


!['img/f12.png'](img/f12.PNG)

Marking a Task as Completed, Click on the blue button :

!['img/f13.png'](img/f13.PNG)

Deleting a Completed Task Click on the red button :

!['img/f14.png'](img/f14.PNG)

