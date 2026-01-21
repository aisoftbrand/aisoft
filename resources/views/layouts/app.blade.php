<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AISOFT - Xtract</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Figtree:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Scripts for 3D Background -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simplex-noise@2.4.0/simplex-noise.min.js"></script>

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .spotlight {
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 400px;
            background: radial-gradient(ellipse at center, rgba(100, 150, 255, 0.15) 0%, rgba(120, 50, 255, 0.05) 40%, rgba(0,0,0,0) 70%);
            z-index: 1;
            pointer-events: none;
            filter: blur(60px);
        }
        
        .spotlight-core {
            position: absolute;
            top: -150px;
            left: 50%;
            transform: translateX(-50%);
            width: 40%;
            height: 300px;
            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.1) 0%, rgba(0,0,0,0) 70%);
            z-index: 1;
            filter: blur(80px);
        }

        .metallic-text {
            color: white; 
            background-image: linear-gradient(
                180deg, 
                #FFFFFF 10%,
                #93C5FD 55%,
                #7C3AED 90%
            );
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0px 2px 0px rgba(0,0,0,0.5));
        }

        #canvas-container {
            position: fixed; top: 0; left: 0; width: 100%; height: 100vh; z-index: 0;
            mask-image: linear-gradient(to bottom, black 40%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 40%, transparent 100%);
        }
    </style>
</head>
<body style="background: #03000a;" class="text-white min-h-screen relative selection:bg-purple-500 font-sans">

    <div id="canvas-container"></div>
    <div class="spotlight"></div>
    <div class="spotlight-core"></div>

    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const CONFIG = { 
                gridSize: 50, 
                gridDepth: 50, 
                terrainHeight: 2.5, 
                speed: 0.03, 
                lineColor: 0x4a4a4a, 
                bgColor: 0x03000a
            };

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.set(0, 4, 8); 
            camera.lookAt(0, 0, -10);

            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setClearColor(CONFIG.bgColor, 0);
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            document.getElementById('canvas-container').appendChild(renderer.domElement);
            
            const geometry = new THREE.PlaneGeometry(80, 80, CONFIG.gridSize, CONFIG.gridDepth);
            const material = new THREE.MeshBasicMaterial({ 
                color: CONFIG.lineColor, 
                wireframe: true, 
                transparent: true, 
                opacity: 0.3 
            });
            const terrain = new THREE.Mesh(geometry, material);
            terrain.rotation.x = -Math.PI / 2;
            scene.add(terrain);

            const simplex = new SimplexNoise();
            let time = 0;

            function animate() {
                requestAnimationFrame(animate);
                time += CONFIG.speed / 10;
                const pos = geometry.attributes.position;
                for (let i = 0; i < pos.count; i++) {
                    const x = pos.getX(i);
                    const y = pos.getY(i);
                    const z = simplex.noise2D(x * 0.08, (y * 0.08) - time) * CONFIG.terrainHeight;
                    pos.setZ(i, z);
                }
                pos.needsUpdate = true;
                renderer.render(scene, camera);
            }
            animate();

            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
        });
    </script>
</body>
</html>