import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),

        // {
        //     name: "blade",
        //     handleHotUpdate({ file, server }) {
        //         if (file.endsWith(".blade.php")) {
        //             server.ws.send({
        //                 type: "full-reload",
        //                 path: "*",
        //             });
        //         }
        //     },
        // },

        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }




    ],

    server: {
      //  host: '192.168.56.56',
        watch: {
            usePolling: true,
        },
    },




});
