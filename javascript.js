const colorDefinitionAsJSON = JSON.parse('{"colors": [{"font": "white", "background": "black"},{"font": "black", "background": "white"}, {"font": "white", "background": "blue"}]}')
const colorModes = {
    dark: 'color: ' + colorDefinitionAsJSON.colors[0].font + '; background-color: ' + colorDefinitionAsJSON.colors[0].background + ';',
    light: 'color: ' + colorDefinitionAsJSON.colors[1].font + '; background-color: ' + colorDefinitionAsJSON.colors[1].background + ';',
    blue: 'color: ' + colorDefinitionAsJSON.colors[2].font + '; background-color: ' + colorDefinitionAsJSON.colors[2].background + ';',
}
function changeColorMode(btn) {
    let element = document.getElementById('color_mode')
    if (btn.id == 'color_mode_button_dark') {
        element.style.cssText = colorModes.dark
    }
    else if (btn.id == 'color_mode_button_light') {
        element.style.cssText = colorModes.light
    }
    else if (btn.id == 'color_mode_button_blue') {
        element.style.cssText = colorModes.blue
    }
}
