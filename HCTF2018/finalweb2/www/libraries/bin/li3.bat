@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../lithium/console/li3
sh "%BIN_TARGET%" %*
