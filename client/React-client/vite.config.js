import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  // base: "./",
  build: {
    outDir: "public/build", // xuất ra trong thư mục public
    emptyOutDir: true, // xóa thư mục trước khi build
  },
});
