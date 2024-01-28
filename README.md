   <h1 align="center">Laravel MailerLite Integration</h1>

    <h2>Introduction</h2>
    <p>This Laravel application integrates with MailerLite to manage subscribers. Users registering on the platform will automatically have their names and emails added to a specified MailerLite list. Admins can later manage subscribers, including viewing, deleting, and adding subscribers to different groups.</p>

    <h2>Features</h2>
    <ul>
        <li><strong>Automatic Subscriber Addition:</strong> Upon user registration, the user's name and email are automatically added to the designated MailerLite list.</li>
        <li><strong>Admin Panel:</strong> Administrators can manage subscribers, view subscriber details, delete subscribers, and assign subscribers to different groups.</li>
        <li><strong>Secure and Efficient:</strong> Utilizes Laravel's built-in features for secure authentication and efficient database management.</li>
        <li><strong>Scalable:</strong> Designed to scale with your application's growth, allowing for easy management of subscribers as your user base expands.</li>
    </ul>

    <h2>Installation</h2>
    <ol>
        <li>Clone the repository:
            <pre>git clone https://github.com/imabulhasan99/https://github.com/imabulhasan99/Mailer-Lite-API-Consume.git</pre>
        </li>
        <li>Navigate to the project directory:
            <pre>cd Mailer-Lite-API-Consume</pre>
        </li>
        <li>Install dependencies:
            <pre>composer install</pre>
        </li>
        <li>Set up your environment variables by copying the <code>.env.example</code> file:
            <pre>cp .env.example .env</pre>
        </li>
        <li>Generate the application key:
            <pre>php artisan key:generate</pre>
        </li>
        <li>Configure your MailerLite API key in the <code>.env</code> file:
            <pre>MAILER_LITE_API_KEY=your_mailer_lite_api_key_here</pre>
        </li>
        <li>Run database migrations:
            <pre>php artisan migrate</pre>
        </li>
    </ol>

    <h2>Usage</h2>
    <p>Once the installation steps are completed and your application is set up, you can start using the Laravel MailerLite integration. Users registering on your platform will automatically have their information added to the specified MailerLite list. Administrators can access the admin panel to manage subscribers.</p>

    <h2>Admin Panel</h2>
    <p>The admin panel allows administrators to:</p>
    <ul>
        <li>View a list of subscribers</li>
        <li>View subscriber details</li>
        <li>Delete subscribers</li>
        <li>Assign subscribers to different groups</li>
    </ul>
    <p>To access the admin panel, navigate to <code>/admin</code> in your web browser and log in using your administrator credentials.</p>

    <h2>Contributing</h2>
    <p>Contributions to the Laravel MailerLite integration project are welcome! If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.</p>

    <h2>License</h2>
    <p>This project is open-source software licensed under the MIT License.</p>