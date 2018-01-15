<?php

namespace OCA\IssueCreator\Command;

use OC\Core\Command\Base;
use OCP\App\IAppManager;
use OCP\IConfig;
use OCP\Notification\IApp;
use OCP\Template;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateIssue extends Base {

	/**
	 * @var IConfig
	 */
	protected $config;

	/**
	 * @var IAppManager
	 */
	protected $appManager;

	public function __construct($appName, IConfig $config, IAppManager $appManager) {
		$this->appName = $appName;
		$this->config = $config;
		$this->appManager = $appManager;
		parent::__construct();
	}

	public function configure() {
		parent::configure();
		$this
			->setName('issue:create')
			->setDescription('Wizard to create a new issue');
	}

	protected function execute(InputInterface $input, OutputInterface $output) {
		$this->welcome($input, $output, $this->appManager, $this->appName);
	}

	protected function welcome(InputInterface $input, OutputInterface $output, IAppManager $appManager, $appName) {
		$output->writeln("Welcome to the Issue Creator app.");
		$output->writeln("Version: ".$appManager->getAppInfo($appName)['version']);
	}

	protected function buildTemplate($appName) {
		$template = new Template($appName, 'issue-template');
	}

}