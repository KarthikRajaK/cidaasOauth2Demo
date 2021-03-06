<?php declare(strict_types=1);

namespace Cidaas\Oauth2Demo\CidaasOauth2Demo;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\UpdateContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Routing\RouteCollectionBuilder;

class CidaasOauth2Demo extends Plugin
{
    public function install(InstallContext $context): void
    {
        // your code you need to execute while installation
    }

    public function postInstall(InstallContext $context): void
    {
        //your code you need to execute after your plugin gets installed
    }

    public function update(UpdateContext $context): void
    {
       // your code you need to execute while your plugin gets updated
    }

    public function postUpdate(UpdateContext $context): void
    {
        // your code you need to execute after your plugin is updated
    }

    public function activate(ActivateContext $context): void
    {
        // your code you need to execute while your plugin gets activated
    }

    public function deactivate(DeactivateContext $context): void
    {
        // your code you need to run while your plugin gets deactivated
    }

    public function uninstall(UninstallContext $context): void
    {
        // your code you need to execute while your plugin gets uninstalled
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        // your code you need to execute while the DI container is built
    }

    public function getMigrationNamespace(): string
    {
        return 'Cidaas\Oauth2Demo\CidaasOauth2DemoNamespace';
    }

    public function getViewPaths(): array
    {
        return [
            '/Resources/views'
        ];
    }

    public function boot(): void
    {
        parent::boot();
    }

}