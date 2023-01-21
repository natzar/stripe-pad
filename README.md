#  Stripe Pad v.0.0.1
![Stripe Pad Storefront](sample2.png "Stripe Pad Sample Image")
January 20th, 2023. Stripe Pad is a fast and efficient way to sell your products configured in Stripe, acting as a front-end for your Stripe account. Maybe one day it gets to micro SaaS boilerplate category, anyway it allows you to quickly launch and validate new ideas while integrating Stripe payments from the beginning.


Project URL: [www.stripepad.com](https://www.stripepad.com)

Git Repository: [Git repo](https://github.com/natzar/Stripe-Pad)


![Stripe Pad Storefront](sample.png "Stripe Pad Sample Image")




## Getting Started

To get started with Stripe Pad, follow these steps:

```
  git clone https://github.com/natzar/stripe-pad.git
  cd stripe-pad/api
  composer install
  ```

1. clone the repository and install the necessary dependencies with `cd api; composer install`
2. edit config.php, set your stripe credentials and the folder name of the theme you will be using `define('Theme','[THEME FOLDER NAME]')`
3. Open your browser http://localhost/stripe-pad ?

If you did everything well, you will see your products here.

### In Stripe

- Add a webhook https://dashboard.stripe.com/webhooks

## Usage & Customization

Once your Stripe account is configured, you can easily retrieve products and other details from your Stripe Account. The boilerplate also includes basic checkout functionality and a sample thank-you page.

You can also customize the look and feel of the front-end as per your need.

- Clone one of the 2 basic themes inside *themes* folder.
- Basic themes include Tailwind via CDN, no other CSS or JS


## Dependencies
Dependencies are managed via composer

- Stripe



## Roadmap

- Gather feedback
- Nodejs API ?

## Milestones

- January 20th, 2023. Repo created.

## Contributing

Any contributions to Stripe Pad are welcomed. If you have any ideas or suggestions for new features, please feel free to open an issue or submit a pull request.

IMPORTANT: The main advantage of Stripe Pad is being an unopinionated package, the challenge is to maintain every component decoupled from others, there is no js library, no CSS framework. I don't guarantee that it will be like this in the future, but the effort will go always in this direction.

## License

Stripe Pad is open-sourced software licensed under the GPL-3.0 license

## Disclaimer

> Not affiliated in any way with Stripe.com

## Contact 

If you have any questions or need support, please don't hesitate to reach me Twitter [ @betoayesa](https://www.twitter.com/betoayesa)

Thank you for using Stripe Pad!
