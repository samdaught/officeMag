import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
  root: 'react',
  base: '/react-app/',
  plugins: [react()],
  build: {
    outDir: '../web/react-app',
    emptyOutDir: true,
    assetsDir: 'assets',
    rollupOptions: {
      output: {
        entryFileNames: 'app.js',
        chunkFileNames: 'assets/[name]-[hash].js',
        assetFileNames: 'assets/[name]-[hash][extname]'
      }
    }
  }
});
