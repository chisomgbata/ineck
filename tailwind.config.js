import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    extend: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: '#000',
            white: '#fff',
            gray: {
                '50': '#fafaf9',
                '100': '#f5f5f4',
                '200': '#e7e5e4',
                '300': '#D6D3D1',
                '400': '#A8A29E',
                '500': '#78716C',
                '600': '#57534E',
                '700': '#44403c',
                '800': '#292524',
                '900': '#1c1917',
            },
            green: {
                '50': '#e6efee',
                '100': '#cce0dc',
                '200': '#99c0b9',
                '300': '#66a197',
                '400': '#338174',
                '500': '#006251',
                '600': '#004e41',
                '700': '#003b31',
                '800': '#002720',
                '900': '#001410',
            },
            yellow: {
                '50': '#fef8e8',
                '100': '#fef5dd',
                '200': '#fdeec7',
                '300': '#fce7b0',
                '400': '#fbe099',
                '500': '#fbdc8e',
                '600': '#c9b072',
                '700': '#978455',
                '800': '#645839',
                '900': '#322c1c',
            },
            emerald: {
                '50': '#EFF8F4',
                '100': '#E0F1EA',
                '200': '#C2E3D5',
                '300': '#A2D5BF',
                '400': '#84C7AA',
                '500': '#65B996',
                '600': '#519477',
                '700': '#3C6F59',
                '800': '#294A3C',
                '900': '#14251E',
            },
            red: {
                '50': '#FFEFEC',
                '100': '#FEDFD9',
                '200': '#FEBFB4',
                '300': '#FC9D8F',
                '400': '#FC7D6A',
                '500': '#FC5C46',
                '600': '#C94A38',
                '700': '#97372A',
                '800': '#65251C',
                '900': '#32130E',
            },
            orange: {
                '50': '#FDF5EE',
                '100': '#FCEBDD',
                '200': '#F7D8BA',
                '300': '#F4C498',
                '400': '#F0B077',
                '500': '#ED9C56',
                '600': '#BD7D44',
                '700': '#8E5E33',
                '800': '#5E3F22',
                '900': '#301F11',
            },
            blue: {
                '50': '#EEF6F9',
                '100': '#DDECF2',
                '200': '#BBDAE4',
                '300': '#99C7D7',
                '400': '#77B5CA',
                '500': '#56A2BD',
                '600': '#448297',
                '700': '#346171',
                '800': '#22414C',
                '900': '#112026',
            },
        },
    },
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
