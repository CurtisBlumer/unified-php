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

interface ProcessorInterface {
    public function __construct();

    public function use($parameters);
    public function usePlugin(PluginInterface $plugin, PluginOptionsInterface $options = null);
    public function usePreset(PresetInterface $preset);
    public function useList(ListInterface $list);

    public function parse($input);
    public function parseFile(VFileInterface $file);
    public function parseValue(string $value);

    public function stringify(NodeInterface $node, VFileInterface $file = null);

    public function run(NodeInterface $node, VFileInterface $file = null, callable $done = null);
    public function runSync(NodeInterface $node, VFileInterface $file = null): NodeInterface;

    public function process($input, callable $done = null);
    public function processFile(VFileInterface $file, callable $done = null);
    public function processValue(string $value, callable $done = null);

    public function processSync($input);
    public function processSyncFile(VFileInterface $file);
    public function processSyncValue(string $value);

    public function data(string $key, $value = null);
    public function setData(string $key, $value);
    public function getData(string $key);

    public function freeze();
}
