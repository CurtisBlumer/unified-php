<?php
declare(strict_types=1);
/**
 * File defining the Unified plugin interface.
 *
 * @author Curtis Blumer <curtis.blumer@gmail.com>
 * @license MIT
 * @license GPL-2.0+
 * @api
 */

namespace Unified;

interface PluginInterface {
    public function attacher(array $options);
    public function transformer(NodeInterface $node, VFile $file, callable $next = null);
}
