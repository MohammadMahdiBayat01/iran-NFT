module.exports = {
    purge: [
        'public/**/*.php'
    ],
    content : [
      './node_modules/flowbite/**/*.js'
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily : {
            'iransans' : ['bold', 'light', 'medium']
        },
        extend: {
            colors : {
                darkBlue : '#07101D',
                darkGray : '#949494',
                orange: {
                    light : "#FF3C00"
                }
            }
        },
    },
    variants: {},
    plugins: [
        require('flowbite/plugin')
    ],
}