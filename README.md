# Plugintxt Parser

The Plugintxt Parser reads a `plugins.txt` file from a specified URL and outputs structured JSON data. 

```bash
php pluginstxt-parser.php <url> <outputJsonFile>
```

## JSON Output Example

The parser converts each `plugins.txt` entry into the following JSON format, identifying each entry as a plugin, theme, or core based on the provided metadata:

```json
[
    {
        "Directory": "Plugin",
        "Name": "Awesome Plugin",
        "Version": "2.1.0",
        "Description": "A powerful plugin for enhancing site performance.",
        "Repository": "https://example.com/plugins/awesome-plugin.zip",
        "Checksum-Sha256": "d2d2d2e5931b9ecff1f5b5c5ff5f6d9e3d3e0f2e1e3a7a7d6d7d8e9a6a5f9f3",
        "Updates": "https://example.com/category/awesome-plugin-updates",
        "Author": "John Doe",
        "Contact": "mailto:john@example.com",
        "Icon-File": "https://example.com/icons/awesome-plugin-icon.png",
        "License": "GPL-3.0",
        "Meta-Data": {
            "compatibility": "5.8+"
        },
        "Source": "http://localhost:8080/plugins.txt"
    },
    {
        "Directory": "Theme",
        "Name": "Elegant Theme",
        "Version": "1.3.0",
        "Description": "A minimalist theme for blogs.",
        "Repository": "https://example.com/themes/elegant-theme.zip",
        "Checksum-Sha256": "a7b8c9d0e1f2e3d4c5d6b7a8f9e0d1c2b3d4e5f6a7b8c9d0e1f2e3d4c5b6a7",
        "Updates": "https://example.com/category/elegant-theme-updates",
        "Author": "Jane Smith",
        "Contact": "mailto:jane@example.com",
        "Icon-File": "https://example.com/icons/elegant-theme-icon.png",
        "License": "GPL-2.0",
        "Meta-Data": {
            "compatibility": "5.8+"
        },
        "Source": "http://localhost:8080/plugins.txt"
    }
]
```

The parser supports decentralized distribution of metadata not only for plugins but also for **themes** and **core software** by interpreting entries labeled as either `Plugin Name`, `Theme Name`, or `Core Name`. 

This allows developers to self-host plugin, theme, and core software metadata, making it accessible for decentralized platforms.

## Purpose
This parser reads `plugins.txt` files hosted by developers, standardizing the data into a JSON format. While the original specification targets plugins, it is flexible enough to handle themes and core software by adapting the naming conventions for each entry type. 

For the full specification of the `plugins.txt` file format, refer to the [plugins.txt format documentation](https://github.com/neil-zip/pluginstxt) in our repository.

## Example Usage

Run the parser as a PHP CLI script to download and parse the `plugins.txt` file. Use the following command format:

```bash
php pluginstxt-parser.php <url> <outputJsonFile>
```

### Example Command

```bash
php pluginstxt-parser.php https://example.com/.well-known/plugins.txt output.json
```

This command will:

1. Read the `plugins.txt` file from the specified `<url>`.
2. Parse and validates each entry according to `plugins.txt` specs.
3. Save the structured JSON data to the specified `<outputJsonFile>`.

