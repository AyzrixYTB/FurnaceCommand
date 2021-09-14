# Furnace

###### Simple plugin adding a command to furnace the items in your hand.

## Config
```yaml
#    ______
#   |  ____|
#   | |__ _   _ _ __ _ __   __ _  ___ ___
#   |  __| | | | '__| '_ \ / _` |/ __/ _ \
#   | |  | |_| | |  | | | | (_| | (_|  __/
#   |_|   \__,_|_|  |_| |_|\__,_|\___\___|
#
#      
prefix: "§6[§fAyzrix§6]"

command_name: "furnace"
command_description: "Furnace the items in your inventory"
command_permission: "furnace.command"
# ["alias1", "alias2", "alias3", ...]
command_aliases: []

not_player: "{prefix} §cYou must be a player to use this command"
not_permission: "{prefix} §cYou don't have the permission to use this command"
furnace_success: "{prefix} §aThe item in your hand has been successfully furnace"
cannot_furnace: "{prefix} §cThe item in your hand cannot be furnace"
```
