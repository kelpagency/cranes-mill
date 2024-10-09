# Kelp Boilerplate WordPress Theme

The Kelp standard for building WordPress themes using Timber/Twig, ACF Pro, and ACF WP Blocks.

## Getting Started

- Step 1: Run `npm install` and `composer install` in the root directory to install the required dependencies.

That's it. Before you begin coding, be sure to rename this folder, change the README header and description, update the `style.css` file, and `screenshot.png` file with the theme's information (typically the client's name and/or year), and finally, delete this paragraph of the README. Happy coding, you awesome Kelper, you!

## What's here

- `/*.php` - These are the core WordPress files that grabs the data and passes it to the twig files.
- `/static` - This holds all static files the theme depends on such as Sass, JS, and Image files.
- `/views` - This is where all the markup is for various pages, templates, and custom blocks. All the data for the variables in these files comes from the PHP files. If you need additional data, you'll need to pass that to timber's context via the corresponding PHP file.

## Additional Documentation

If you have a question, check the docs first:

- [Timber](https://timber.github.io/docs/) - The thing that enables Twig to work in WordPress
- [Twig](https://twig.symfony.com/doc/) - The primary programming/template markup language
- [ACF Pro](https://www.advancedcustomfields.com/resources/) - The thing that makes custom fields
- [ACF WP Blocks](https://palmiak.github.io/timber-acf-wp-blocks/) - The thing that makes making new custom blocks super simple inside of Timber
