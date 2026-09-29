### Theory 1 - Sep 27
#### Topics Covered:
1. How to build a simple webpage using HTML (more details in the next lab and theory class)
	- Elements: 
		- `<html>`: The root element of an HTML page
		- `<head>`: Contains meta-information about the document
		- `<title>`: Sets the title of the document (shown in browser's title
		- `<body>`: Contains the content of the document
		- `<h1>` to `<h6>`: Heading elements, where `<h1>` is the highest level and `<h6>` is the lowest
		- `<p>`: Paragraph element
		- `<a>`: Anchor element, used to create hyperlinks
			- `href`: Specifies the URL of the page the link goes to
2. Intro to Client Server Architecture (more details in the next theory class)
3. Intro to XAMPP (more details in the next lab class)
 
---


<!-- callout -->
> [!NOTE] 
> Homework: Week 2 HTML slides in the following link

# How to create a simple webpage using HTML
- A webpage consists of different elements.  
- Each element has a corresponding 'tag'.  
- Each tag has an opening part and a closing part.  
- Opening parts look like this: `<tag_name>`  
- Closing parts look like this: `</tag_name>`  
- Between the opening and closing parts, you can put content that you want to display on the webpage: `<tag_name>content</tag_name>`
- i.e. `<p>This is a paragraph</p>`
- i.e. `<h1>This is a heading</h1>`
- i.e. `<a href="https://www.example.com">This is a link</a>`

# Serving web pages with XAMPP
- Install XAMPP and open the XAMPP Control Panel. Then start the Apache server by clicking the "Start" button next to "Apache".
	- If you have any issues, mention in the next class/consultation hour/teams message.
	- Meanwhile, you can open the HTML file directly in your browser.
- All webpages you want to serve must be placed in the `htdocs` folder of your XAMPP installation. Typically, this folder is located at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.
- We created a folder named `wts` inside the `htdocs` folder and placed `index.html` file inside it
- To access the webpage, open a web browser and type `http://localhost/wts/index.html` in the address bar. This will load the `index.html` file from the `wts` folder and display it in the browser.