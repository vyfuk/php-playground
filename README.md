# PHP playground
A simple PHP project which can be used as a playground for new PHP devs...

## Usage
1. Download Docker
  - for Windows & MacOS: https://www.docker.com/products/docker-desktop
    - on Windows, WSL2 is highly recomended - consult the official manual here: https://docs.docker.com/desktop/windows/wsl/
    - on macOS, Mutagen can be used to improve performance, but it's tricky to install, and you probably do not need it unless you are running really big project (fksdb maybe?)
  - for Linux - find docker & docker-compose packages in your distro's package manager, or consult this manual: https://docs.docker.com/desktop/install/linux-install/
2. Download Git (ofc, how could you develop apps without it?)
3. Clone this repo
  - If you opt-in to using WSL on Windows, clone it to the Linux filesystem, not Windows! (So under your linux user in WSL, not on your Windows desktop.)
    Not doing so can cause strange behavior.
4. Turn on Docker backend
  - On Windows/MacOS, turn on the Docker Desktop app.
  - On Linux, start the docker.service (systemctl start docker.service). If you want Docker to start automatically on boot, enable it too (systemctl enable docker.service).
5. Compose this project
  - You should now be able to run docker-compose up command inside this folder just fine. If not, try to restart your PC. If it's still not working, seek for help.
  - If you opt-in to WSL2 on Windows, run this command inside your WSL console (not the Windows one!).
6. Have fun!
  - If the compose has been successful, now you can open address *http://localhost:8080* and see the pages defined inside the www folder.
  - You can do anything you want with this project - you can even use it as a base for any webpage of yours. Just mention me in the credits, okay?

© 2022 Jarý Miroslav