# About

Get back **[Show / Hide Editor]** button for `HTML Code` PageBuilder element which triggers
TinyMCE WYSIWYG Editor.

Additionally, this module provides the ability to toggle WYSIWYG editor for admin panel text fields.<br>
Field should have the following elements:
- `<attribute type="target_field_id">{section_id}_{group_id}_{field_id}</attribute>`
- `<frontend_model>AcidUnit\WysiwygEditor\Block\Adminhtml\System\Config\Form\Field\ToggleEditorButton</frontend_model>`

Use the code below as an example.

```xml
<section id="finn">
    ...
    <group id="the_human">
        ...
        <field id="information" type="textarea">
            ...
        </field>
        
        <field id="information_toggle_editor">
            <attribute type="target_field_id">finn_the_human_information</attribute>
            <frontend_model>AcidUnit\WysiwygEditor\Block\Adminhtml\System\Config\Form\Field\ToggleEditorButton</frontend_model>
        </field>
    </group>
</section>
```

# Installation

`composer require acid-unit/module-wysiwyg-editor`

# Requirements

- `Adobe Commerce 2.4.4` or newer
- `PHP 8.1` or newer
