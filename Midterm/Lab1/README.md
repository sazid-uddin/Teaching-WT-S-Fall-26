### Lab 1 - Sep 29
#### Setup:
1. Open XAMPP Control Panel and start the Apache server.
	- To test if the server is running, open your web browser and go to `http://localhost:{port_number}`. i.e. `http://localhost:80` or `http://localhost:81` depending on your configuration. You should see the XAMPP welcome page if the server is running correctly.
2. Create a folder named `wts` inside the `htdocs` folder of your XAMPP installation. This is where you will place your HTML files.
	- To find the `htdocs` folder, navigate to the directory where you installed XAMPP. On Windows, it is typically located at `C:\xampp\htdocs`. On macOS, it is usually found at `/Applications/XAMPP/htdocs`.
3. Open the `wts` folder with VS Code and create a folder called `Lab 1` inside `wts`. This is where you will save your lab files today.
4. Create a new file named `index.html` inside the `Lab 1` folder. This will be your first HTML file.

#### Topics Covered
1. Image Element
	- `src` attribute: Specifies the path to the image file
	- `height` attribute: Specifies the height of the image (in pixels)
	- `width` attribute: Specifies the width of the image (in pixels)
	- `alt` attribute: HOMEWORK
2. Favicon
	- Favicon is a small icon that represents a website, typically displayed in the browser's address bar or tab. It helps users identify and differentiate between websites quickly.
	- To add a favicon to your webpage, you can use the `<link>` element in the `<head>` section of your HTML document. The `rel` attribute should be set to "icon", and the `href` attribute should point to the location of your favicon file (usually a `.ico`, `.png`, or `.svg` file). For example:
		```html
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		```
3. HTML Table
	- Use the `<table>`tag to create a table
	- HTML Tables are created row by row. The first row is usually the header row (containing column names)
	- Use `<tr>` tag to create a row
		- Inside the `<tr>` tag use `<td>` to create data cells and `<th>` to create header cells
	- Styling a table to add borders and gaps between cells
		- For this we need a little bit of CSS code
		- To add borders:
		```css
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		```
		- To add gaps between cells:
		```css
		th, td {
			padding: 10px;
		}
		```
4. HTML Forms
	- Used to create forms where users submit their data to the website
	- i.e. Account creation form (see [Lab 1's example form.html](form.html))
		- May contain input fields for username, password, email, gender, age etc.
		- Each type of input field is created using the `<input>` tag with different `type` attributes (e.g., `text`, `password`, `email`, `number`, `radio`, `checkbox`, etc.)
		- All forms should have a submit button, which is created using the `<input>` tag with `type="submit"` (and optionally a `value` attribute to specify the text on the button). When the user clicks this button, the form data is sent to the server for processing (this will be coverered in the final term).
		- **Form Validation**
			- All user input should be validated to ensure that the data is in the correct format and meets the required criteria before it is submitted. This can be done using HTML5 attributes (e.g., `required`, `pattern`, `min`, `max`, etc.) or JavaScript for more complex validation. <small>*This is arguably the most important aspect of form design and of this course.*</small>

> [!NOTE]
> Homework: Please study the different types of input fields and their attributes, **especially the validation attributes**. You will be asked to create a form with various input fields in an upcoming lab task.
> Use w3schools.com as a reference for this. Here are the links: 
> - [HTML Forms](https://www.w3schools.com/html/html_forms.asp)
> - [HTML Input Types (for different types of fields)](https://www.w3schools.com/html/html_form_input_types.asp)
> - [HTML Input Attributes (for validation)](https://www.w3schools.com/html/html_form_attributes.asp)