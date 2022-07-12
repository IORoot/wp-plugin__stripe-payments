
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fcode-string.svg&fill=%233730A3&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Stripe Payments Plugin : Customisations</h3>

<p align="center">
Some simple customisations for the third-party stripe payment plugin.
</p>
</div>


##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
* 4. [Contributing](#Contributing)
* 5. [License](#License)
* 6. [Contact](#Contact)
* 7. [Changelog](#Changelog)


##  2. <a name='AboutTheProject'></a>About The Project


<p align="right">(<a href="#top">back to top</a>)</p>



###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [Plugins for Stripe](https://s-plugins.com/)
* [Stripe](https://stripe.com/gb)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)
* [Composer](https://getcomposer.org/)
* [Tailwind](https://tailwindcss.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```sh
    git clone https://github.com/IORoot/wp-plugin__stripe-payments ./wp-content/plugins/stripe-customisations
    ```
1. Composer.
    ```sh
    cd ./wp-content/plugins/stripe-customisations
    composer install
    ```

<p align="right">(<a href="#top">back to top</a>)</p>


##  3. <a name='Usage'></a>Usage

There are currently seven customisations hooked into the stripe plugin filters.

1. `stripe_change_images.php`

Gets the original image address from the product (rather than the generated thumbnail).

2. `stripe_class_date_in_email.php`

Include the parkour class date into the response email. 

3. `stripe_giftcard_generator.php `

Generate a giftcard number automatically and assign it to a stripe product specific to the one the customer has bought. This is used for the 'Gift Cards' on LondonParkour.com.

4. `stripe_mailchimp.php`

Adds the user's email address to mailchimp.

5. `stripe_receipt_url_moustache.php`

Creates a new moustache bracket called `{receipt_url}` that can be used on customer emails. This points them to the real URL of the stripe receipt.

6. `stripe_thankyou_details.php`

Generate a Thank-you page with the users details.

7. `stripe_thankyou_message.php`

Generate a Thank-you message.



<p align="right">(<a href="#top">back to top</a>)</p>



##  4. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  5. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  6. <a name='Contact'></a>Contact

Project Link: [https://github.com/IORoot/...](https://github.com/IORoot/...)

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='Changelog'></a>Changelog

v1.0.0 - First version.
