import preset from '../../filament/filament/tailwind.config.preset.js'

/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [preset],
    content: [
        './resources/views/**/*.blade.php',
        './src/**/*.php'
    ],
}
