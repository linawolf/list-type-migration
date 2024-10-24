# TYPO3 Plugin migration `list_type` to `CType`

To offer a migration path for an extension that supports both TYPO3 v12 and v13,
extend `Linawolf\ListTypeMigration\Upgrades\AbstractListTypeToCTypeUpdate`:

```
<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Upgrades;

use Linawolf\ListTypeMigration\Upgrades\AbstractListTypeToCTypeUpdate;
use TYPO3\CMS\Install\Attribute\UpgradeWizard;

#[UpgradeWizard('myExtensionPluginListTypeToCTypeUpdate')]
final class PluginListTypeToCTypeUpdate extends AbstractListTypeToCTypeUpdate
{

    protected function getListTypeToCTypeMapping(): array
    {
        return [
            'my_extension_pi1' => 'my_extension_pi1',
            'my_extension_pi2' => 'my_extension_newpluginname',
        ];
    }

    public function getTitle(): string
    {
        return 'Migrates my_extension plugins';
    }

    public function getDescription(): string
    {
        return 'Migrates my_extension_pi1, my_extension_pi2  from list_type to CType. ';
    }
}

```

If you also have to be compatible with TYPO3 v11, register the Upgrade Wizard manually:
https://docs.typo3.org/m/typo3/reference-coreapi/11.5/en-us/ExtensionArchitecture/HowTo/UpdateExtensions/UpdateWizards/Creation.html#upgrade-wizards-register
