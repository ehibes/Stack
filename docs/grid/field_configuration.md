Configuring Fields
==================

Each field can be configured with several configuration keys, to make it
more suitable to your grid requirements.

  | Name     | Type   | Description                                                                                         |
  |----------|--------|-----------------------------------------------------------------------------------------------------|
  | type     | string | Type of column. Default field types are described [here](field_types.md).                           |
  | label    | string | Label displayed in the field header. By default, it is field name.                                  |
  | path     | string | Path to property displayed in field (can be property of resource or one of its referenced objects). |
  | position | int    | Position of field in the grid index view.                                                           |
  | options  | array  | Array of field options (see below).                                                                 |

The `options` field can itself contain the following fields:

  | Name     | Type   | Description                                                                                                 | Default     |
  |----------|--------|-------------------------------------------------------------------------------------------------------------|-------------|
  | template | string | Available (and required) only for *twig* column type. Path to template that is used to render column value. |             |
  | format   | string | Available only for *datetime* field type.                                                                   | `Y:m:d` `H:i:s` |
