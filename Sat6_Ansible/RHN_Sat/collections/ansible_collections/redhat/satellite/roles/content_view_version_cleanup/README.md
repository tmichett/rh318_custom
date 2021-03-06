redhat.satellite.content_view_version_cleanup
===============================================

Clean up unused Content View Versions.

This role will remove any unused versions of your Content Views and
Composite Content Views.

Unused versions are those that match the following criteria:
* not published to any Lifecycle Environment
* not published as part of any Composite Content View
* not part of any Composite Content View Version

This role will first clean Composite Content Views, to avoid leaving
unused versions of regular Content Views behind.

Role Variables
--------------

This role supports the [Common Role Variables](https://github.com/theforeman/foreman-ansible-modules/blob/develop/README.md#common-role-variables).

### Required

- `satellite_content_view_version_cleanup_keep`: How many unused versions to keep.

### Optional

- `satellite_content_view_version_cleanup_search`: Limit the cleaned content views using a search string (example: `name ~ SOE`).
  When using Composite Content Views, both the composite and the non-composite ones need to match this search to be properly cleaned up by this role.

Example Playbook
----------------

```yaml
- hosts: localhost
  roles:
    - role: redhat.satellite.content_view_version_cleanup
      vars:
        satellite_server_url: https://satellite.example.com
        satellite_username: "admin"
        satellite_password: "changeme"
        satellite_organization: "Default Organization"
        satellite_content_view_version_cleanup_keep: 10
```
