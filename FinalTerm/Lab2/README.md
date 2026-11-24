### Final Term Lab 2 - Nov 22

#### Topics Covered:

##### MVC Structure:

1. Model-View-Controller architecture
    - Model: data and business logic
    - View: HTML interface
    - Controller: handles requests and coordinates model and view
2. Project folder structure
    - `model`
    - `view`
    - `controller`

##### PHP Login Example:

1. Including PHP files with `require_once`
2. Reading form data with `$_POST`
3. Accessing submitted email and password values
4. Creating and using a model object
5. Comparing login credentials
6. Using arrays and associative arrays
7. Returning success or failure from a function

##### Form and Page Navigation:

1. Login form submission
2. POST form method
3. Redirecting pages with `header()`
4. Redirecting successful login to the dashboard
5. Redirecting failed login to the login page
6. Entry point (index.php at project root): next class

#### Files:

- `project/view/login.php` - login form
- `project/controller/loginController.php` - handles submitted login data
- `project/model/User.php` - validates credentials against a dummy user list
- `project/view/dashboard.php` - page displayed after a successful login
