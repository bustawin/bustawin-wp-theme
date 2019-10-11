# bustawin theme
The wordpress theme of the bustawin website. It is a child theme of [UnderStrap](https://github.com/understrap/understrap).

## Developing
1. `npm install yarn`
2. `yarn install`
3. `gulp copy-assets`

To auto generate assets (css files...):
`gulp watch`

This leaves the CSS at `/css` folder. Note that wordpress oly wants `/css/child-theme.min.css`.

## Building
To generate assets for production (minimized, etc.): `dist-product` (results are in `/dist-product`).

## License
The whole code is AGPLv2, except the images, which are proprietary —not open.
Please, message me if you want to use any image and I will ask the
authors. Thank you.
