# Introduction

This theme is a minimal WordPress theme using [Tailwind CSS](https://tailwindcss.com/).

## Getting Started

To use this theme, follow these steps:

1. Clone this repository to your WordPress theme directory: `[root-path]/wp-content/themes/[theme-name]/`
2. Run `npm install` to install the required dependencies.
3. Run `npm run watch` to start developing. The `watch` flag is essential as it ensures all Tailwind CSS classes are deployed as expected.

### NPM Scripts

Several NPM scripts are available to help you manage the theme. Below is the list of available scripts defined in the `package.json` file under the "scripts" section. You can execute a script through the terminal by running `npm run script-name`.

| Script     | Description                                                                           |
| ---------- | ------------------------------------------------------------------------------------- |
| production | Creates a production (minified) build of app.js, app.css, and editor-style.css.       |
| dev        | Creates a development build of app.js, app.css, and editor-style.css.                 |
| watch      | Runs several watch scripts concurrently.                                              |
| watch-sync | Runs several watch scripts concurrently and starts `browser-sync` for live reloading. |

### Deployment after Updates

When you run `npm run watch`, all scripts and stylesheet files will be deployed automatically. After making updates, you can push the changes to the `main` branch.

For CI/CD, we use the **WP Pusher** plugin. Refer to the [documentation](https://docs.wppusher.com/) for setting up new CI/CD configurations as required.

## Theme Structure

TailPress follows the [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/). Before making any changes, familiarize yourself with the hierarchy.

### Resources

TailPress utilizes the [Tailwind CLI](https://tailwindcss.com/docs/installation#using-tailwind-cli), [PostCSS](https://postcss.org), and [esbuild](https://esbuild.github.io). The editable CSS and JavaScript files can be found within the `/resources` folder.

❗️Please avoid modifying the files under `./css` and `./js`. All files inside these directories are deployed automatically.

### Pages Templates

All page templates are located in the `/page-templates` directory. Each template's name is defined at the first line of the file, like this:

```
<?php /* Template Name: 404 Template */ ?>
```

You can select these templates from the Page section in the WordPress backend:
[IMAGE]

❗️Note: `page_flexible-layout.php` is no longer used. Please use `page_flexible-layout-test.php` instead.

### Components Templates

All component templates are stored in the `/template-parts` directory. You can call each component using the built-in WordPress function `get_template_part()`:

```
get_template_part( 'template-parts/flexibleLayouts/product-and-service-list' );
```

## Links

Here are some useful links related to TailPress:

-   [TailPress Website](https://tailpress.io)
-   [Screencasts](https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG)
-   [Tailwind CSS Documentation](https://tailwindcss.com/docs)
-   [esbuild Documentation](https://esbuild.github.io)
-   [WP Pusher](https://wppusher.com/)

Feel free to reach out to our support team if you have any questions or need further assistance. Happy building with TailPress!
