<?php
class UserStatistics
{
    private $redis;

    public function __construct($config)
    {
        $this->redis = new Redis();
        $this->redis->connect($config['host'], $config['port'], $config['timeout'], null);
    }

    public function getRedisKey($timestamp)
    {
        return sprintf('play:%s', date('Y-m-d', $timestamp));
    }

    /**
     * 设置今日活跃用户
     */
    public function setActiveUser($userId, $timestamp = null)
    {
        if (empty($timestamp)) {
            $timestamp = time();
        }
        $activeKey = $this->getRedisKey($timestamp);
        return $this->redis->sAdd($activeKey, $userId);
    }
}

$config = array(
    'host'    => '127.0.0.1',
    'port'    => 6379,
    'timeout' => 1,
);
$userStats = new UserStatistics($config);

$uidList = array(10001, 10002, 10003, 10004, 10005);
foreach ($uidList as $uid) {
    $userStats->setActiveUser($uid, 1418483295 - 6 * 86400);
}
