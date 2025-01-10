<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Mazady Task
The objective of this task is to check the coding techniques, quality, and testing methods,.....

Requirements:

1- employees' salary (Blade file)

create schema contains three tables (employees, salaries, departments) and make seeders for these tables (add necessary columns for each table)

● every employee can work in multiple departments
● every department has more than one employee
● for each department, there is a specific salary
● more than one department can take the same salary
● employee's salary is the highest department salary he works in

show in the blade file (view) numeric input to let the user enter number between [5, 50]

when clicking on submit button will return in the table all users who take the N highest salary (N: number entered from user)
ex: N = 3
result: all employees take the third highest salary

2- Create REST API that allows users to manage their notes.

Notes can be organized into folders for easier management.
API should allow user authentication through basic HTTP authentication (email and password).
The goal is to build a simple but secure and easily scalable service.

Entities
Basic user info (name, username, email, password) should be stored in the database
Users own multiple folders that can be named
Folders contain multiple notes that can be named
Notes can be shared (visible to all users and unauthenticated viewers) or private (visible only to the creator)
Notes can be of 2 different types
Text note - has text body
Pdf note



Acceptance Criteria:
● code it in Laravel, mysql,...
● Add at least 3 unit/feature test cases
● Feel free to use any third-party libraries.
