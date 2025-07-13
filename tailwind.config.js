/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        cloud: '#f0f4f8',
        navy: '#1e3a8a',
        pale: '#e2e8f0',
        ocean: '#0284c7',
        sky: '#bae6fd',
        muted: '#64748b',
        peach: '#fce3d9',
        lightRed: '#FB7185',
      },
    },
  },
  plugins: [],
}
