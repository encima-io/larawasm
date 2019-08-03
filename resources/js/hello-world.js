import("hello-world")
    .then(module => {
        // Now we trigger the function located in: wasm/hello-world/src/lib.rs
        module.greet();
    })
    .catch(e => console.error("Error importing `hello-world`:", e));
