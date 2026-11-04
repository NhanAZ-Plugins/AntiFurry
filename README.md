# AntiFurry

Check selected text in player joins and chat on Axolotl-PM

[![CI](https://github.com/NhanAZ-Plugins/AntiFurry/actions/workflows/build.yml/badge.svg)](https://github.com/NhanAZ-Plugins/AntiFurry/actions/workflows/build.yml)
[![Latest release](https://img.shields.io/github/v/release/NhanAZ-Plugins/AntiFurry)](https://github.com/NhanAZ-Plugins/AntiFurry/releases/latest)
[![License](https://img.shields.io/github/license/NhanAZ-Plugins/AntiFurry)](https://github.com/NhanAZ-Plugins/AntiFurry/blob/master/LICENSE)
[![Discord](https://img.shields.io/discord/986553214889517088?label=Discord&logo=discord&logoColor=white&color=5865F2)](https://discord.gg/j2X83ujT6c)


## Behavior

The plugin listens for player join and chat events. It searches for `UwU`, `OwO` and `furry` with case-sensitive substring matching. A matching player is kicked with the message defined in the source. The current release has no commands, permissions or configuration file.

Version 1.0.1 registers the event listener and checks every keyword. Earlier source returned after testing only the first keyword, and the event handlers were not registered.

## Requirements and compatibility

- Axolotl-PM with plugin API `5.0.0`.
- PHP 8.1 or newer in the Axolotl-PM 5 toolchain.

The [build workflow](.github/workflows/build.yml) pins the Axolotl-PM source used for PHPStan level max. The tested runtime version is recorded in release evidence. Compatibility with every Axolotl-PM 5.x release has not been established.

## Installation

Download `AntiFurry.phar` from a verified [GitHub release](https://github.com/NhanAZ-Plugins/AntiFurry/releases), place it in the server's `plugins/` directory and restart the server. Review the keywords and kick messages in the source before enabling this behavior on a community server.

## Building and testing

The [build workflow](.github/workflows/build.yml) checks word matching, runs PHPStan level max, builds the PHAR with [DevTools](https://github.com/NhanAZ/DevTools), and verifies its contents and checksum. The workflow pins the builder revision. A clean startup check verifies that the PHAR loads. Player join and chat events require a Bedrock client test.

## License and support

The plugin source is licensed under [GPL-3.0](LICENSE). The `IgPlugin` namespace and contributor history are preserved. For help, use [NhanAZ Discord](https://discord.gg/j2X83ujT6c).


## Credits

Authors: NhanAZ.
