# solar-roi-simulator***
Develop a web application where users enter data about their solar pv-installation and obtain a calculation of the estimated time to recover the investment.
Using the following technologies:  
✅ Frontend: HTML, CSS, JavaScript (Bootstrap)  
✅ Backend: PHP con Apache  
✅ Local Server: Apache (with XAMPP)
✅ Or Real Web Server

🗂️ Proyect Structure  
📂 solar-roi-simulator/  
├── 📁 public/ (Accesible files, HTML, CSS, JS)  
├── 📁 src/ (PHP code 6 backend logic)  
├── 📁 database/ (Esquema SQL para MySQL)  
├── 📁 assets/ (Images, icons, etc.)  
├── 📄 index.php (Página principal con formulario)  
├── 📄 calculate.php (Lógica para calcular el ROI)  
├── 📄 results.php (Muestra los resultados)  

Main Functionalities:  
- Input Form: Users will input parameters like system size (in kW), installation cost, energy savings, and other relevant variables.  
- Calculation Logic: The PHP script will calculate the ROI based on user input.  
- Result Display: After the calculation, the results will be displayed to the user, showing ROI, payback period, and energy savings over time.  
- Responsive Design: The UI should adjust properly to different screen sizes for accessibility.    

Steps to Display Results on a Local XAMPP Server or Real Web Server:   
1. Set Up XAMPP (Local Server)  
Install XAMPP and start Apache.  
Place your project in the htdocs folder of XAMPP.  
Access the project in the browser using http://localhost/your-project-folder.  

3. Upload to a Real Web Server    
Choose a Hosting Provider that supports PHP and MySQL.  
Upload your project files to the server using FTP or cPanel File Manager.  
Ensure that the database (if needed) is correctly set up on the hosting server.  
Access your project via your domain name.  

